<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forms\FeedbackRequest;
use App\Http\Requests\Forms\RecallRequest;
use App\Services\Forms\Feedback\FeedbackCommand;
use App\Services\Recall\RecallCommand;
use Illuminate\Support\Facades\Validator;
use TimeHunter\LaravelGoogleReCaptchaV3\Validations\GoogleReCaptchaV3ValidationRule;

class FormController extends Controller
{

    public function feedbackForm(
        FeedbackRequest $request,
        FeedbackCommand $command
    ): array
    {
        $rule = [
            'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('user_form_action')]
        ];

        $validator = Validator::make($request->toArray(), $rule)->errors();

        if (!count($validator->toArray()) && $request->get('name')) {
            abort(403, 'Bot Find');
        }

//        if ($request->get('name')) {
//            abort(403, 'Bot Find');
//        }

        return $command->execute($request->getDto());
    }

    public function recall(
        RecallRequest $recallRequest,
        RecallCommand $command
    ): array
    {
        $rule = [
            'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('user_form_action')]
        ];

        $validator = Validator::make($recallRequest->toArray(), $rule)->errors();

        if (!count($validator->toArray()) && $recallRequest->get('name')) {
            abort(403, 'Bot Find');
        }


//        if ($recallRequest->get('name')) {
//            abort(403, 'Bot Find');
//        }

        return $command->execute($recallRequest->getDto());
    }

}
