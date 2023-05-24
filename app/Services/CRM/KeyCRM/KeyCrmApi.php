<?php

namespace App\Services\CRM\KeyCRM;

use App\Services\ApiService;
use JsonException;

class KeyCrmApi
{
    public $apiService;

    final public function __construct()
    {
        $this->apiService = app(ApiService::class);
    }

    /**
     * @throws JsonException
     */
    final public function createLead(array $data, string $lead_title = null): array
    {
        $url = env('KEY_CRM_CREATE_LEAD_URL');
        $data = [
            'title' => $lead_title,
            'source_id' => env('KEY_CRM_SOURCE_ID'),
            'manager_comment' => $data['text'] ?? null,
            'manager_id' => env('KEY_CRM_MANAGER_ID'),
            'pipeline_id' => env('KEY_CRM_PIPELINE_ID'),
            'contact' => [
                'full_name' => $data['name_t'] ?? null,
                'email' => $data['email'] ?? null,
                'phone' => $data['phone']
            ],
            "utm_source" => $data['utm_source'] ?? null,
            "utm_medium" => $data['utm_medium'] ?? null,
            "utm_campaign" => $data['utm_campaign'] ?? null,
            "utm_term" => $data['utm_term'] ?? null,
            "utm_content" => $data['utm_content'] ?? null,
        ];
        $method = 'POST';
        $params = [
            "Content-type: application/json",
            "Accept: application/json",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            'Authorization:  Bearer ' . env('KEY_CRM_API_KEY')
        ];

        return $this->apiService->response($url, $data, $method, $params);
    }
}
