<?php

declare(strict_types=1);

namespace App\Services\Recall;


/**
 * Class RecallDto
 * @package App\Services\Recall
 */
final class RecallDto
{
    /**
     * @var string
     */
    private string $phone;

    /**
     * RecallDto constructor.
     *
     * @param  string  $phone
     */
    public function __construct(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
}
