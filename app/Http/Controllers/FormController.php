<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forms\FeedbackRequest;
use App\Http\Requests\Forms\RecallRequest;
use App\Services\Forms\Feedback\FeedbackCommand;
use App\Services\Recall\RecallCommand;

class FormController extends Controller
{

    public function feedbackForm(
        FeedbackRequest $request,
        FeedbackCommand $command
    ): array
    {
        if ($request->get('name')) {
            abort(403, 'Bot Find');
        }

        return $command->execute($request->getDto());
    }

    public function recall(
        RecallRequest $recallRequest,
        RecallCommand $command
    ): array
    {

        if ($recallRequest->get('name')) {
            abort(403, 'Bot Find');
        }

        return $command->execute($recallRequest->getDto());
    }

}
