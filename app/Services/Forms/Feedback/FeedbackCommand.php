<?php

declare(strict_types=1);

namespace App\Services\Forms\Feedback;


use App\Events\CreateLidEvent;
use App\Models\Forms\Feedback;

use Illuminate\Events\Dispatcher;

/**
 * Class FeedbackCommand
 * @package App\Services\Forms\Feedback
 */
final class FeedbackCommand
{


    /**
     * FeedbackCommand constructor.
     *
     * @param  Dispatcher  $dispatcher
     */
    public function __construct()
    {
    }


    /**
     * @param  FeedbackDto  $dto
     *
     * @return string[]
     */
    public function execute(FeedbackDto $dto): array
    {
        $feedback = new Feedback();

        $feedback->name  = $dto->getName();
        $feedback->phone = $dto->getPhone();
        $feedback->text  = $dto->getText();
        $feedback->url   = $dto->getUrl();
        $feedback->save();

        event(new CreateLidEvent($this->getLidParams($dto)));

        return ['status' => 'send'];
    }

    /**
     * @param  FeedbackDto  $dto
     *
     * @return array
     */
    private function getLidParams(FeedbackDto $dto): array
    {
        $text = 'Заявка со страницы '.$dto->getUrl();

        if ($dto->getText()) {
            $text .= '<br> Текст сообщения:<br> '.$dto->getText();
        }

        return [
            'name'  => $dto->getName(),
            'phone' => $dto->getPhone(),
            'title' => $dto->getName().' '.$dto->getPhone(),
            'text'  => $text,
        ];
    }
}
