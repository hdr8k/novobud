<?php

declare(strict_types=1);

namespace App\Services\Recall;


use App\Events\CreateLidEvent;
use App\Models\Recall;

final class RecallCommand
{
    public function execute(RecallDto $dto): array
    {
        $recall = new Recall();

        $recall->phone = $dto->getPhone();

        $recall->save();

        event(new CreateLidEvent($this->getLidParams($dto)));

        return ['status' => 'send'];
    }

    private function getLidParams(RecallDto $dto): array
    {
        return [
            'phone' => $dto->getPhone(),
            'title' => $dto->getPhone(),
            'text'  => 'Закрепленная кнопка обратного звонка',
        ];
    }
}
