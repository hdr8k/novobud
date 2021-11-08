<?php

declare(strict_types=1);

namespace App\Services\CRM\Bitrix;

use App\Models\BitrixError;
use App\Services\CRM\Contracts\CrmApi;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

final class BitrixApi implements CrmApi
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('bitrix.url').'/rest/'
                .config('bitrix.user_id').'/'.config('bitrix.webhook_code').'/',
        ]);
    }

    public function createLid(array $params): bool
    {
        try {
            $response = $this->client->get('crm.lead.add.json', [
                "query" => [
                    "fields" => [
                        "TITLE"    => $params['title'],
                        "NAME"     => $params['name'] ?? '',
                        "PHONE"    => [
                            "n0" => [
                                "VALUE"      => $params['phone'] ?? '',
                                "VALUE_TYPE" => "MOBILE",
                            ],
                        ],
                        "params"   => [
                            "REGISTER_SONET_EVENT" => 'N',
                        ],
                        'COMMENTS' => $params['text'],
                    ],
                ],
            ]);
        } catch (GuzzleException $e) {
            $this->writeErrorToDb($e->getMessage(), ['data' => $params,]);

            return false;
        }

        try {
            $responseBody = collect(json_decode(
                $response
                    ->getBody()
                    ->getContents(),
                true, 512, JSON_THROW_ON_ERROR));
        } catch (\JsonException $e) {
            $this->writeErrorToDb($e->getMessage(), ['data_string' => $response->getBody()->getContents()]);

            return false;
        }

        if ($responseBody->has('error')) {
            $this->writeErrorToDb($responseBody->get('error_description'),
                ['data_string' => $responseBody->toArray()]);

            return false;
        }

        return true;
    }


    private function writeErrorToDb(string $messages, array $data): void
    {
        $bitrixError = new BitrixError();

        $bitrixError->error_description = $messages;
        $bitrixError->data              = $data;
        $bitrixError->save();
    }
}
