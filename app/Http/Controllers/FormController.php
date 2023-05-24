<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forms\FeedbackRequest;
use App\Http\Requests\Forms\RecallRequest;
use App\Services\CRM\KeyCRM\KeyCrmApi;
use App\Services\Forms\Feedback\FeedbackCommand;
use App\Services\Recall\RecallCommand;
use JsonException;

class FormController extends Controller
{
    private $keyCrmApi;

    final  public function __construct()
    {
        $this->keyCrmApi = app(KeyCrmApi::class);
    }

    /**
     * @throws JsonException
     */
    final public function feedbackForm(FeedbackRequest $request, FeedbackCommand $command): array
    {
        if ($request->get('name')) {
            abort(403, 'Bot Find');
        }

        $command->execute($request->getDto());
        $this->keyCrmApi->createLead($request->all(), 'Подобрать квартиру');
        return ['status' => 'send'];
    }

    /**
     * @throws JsonException
     */
    final public function recall(RecallRequest $recallRequest, RecallCommand $command): array
    {
        if ($recallRequest->get('name')) {
            abort(403, 'Bot Find');
        }

        $command->execute($recallRequest->getDto());
        $this->keyCrmApi->createLead($recallRequest->all(), 'Перезвонить в ближайшее время');
        return ['status' => 'send'];
    }

}
