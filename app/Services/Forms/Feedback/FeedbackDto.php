<?php

declare(strict_types=1);

namespace App\Services\Forms\Feedback;


/**
 * Class FeedbackDto
 * @package App\Services\Forms\Feedback
 */
final class FeedbackDto
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $phone;

    /**
     * @var string|null
     */
    private ?string $text;

    /**
     * @var string
     */
    private string $url;

    /**
     * FeedbackDto constructor.
     *
     * @param  string  $name
     * @param  string  $phone
     * @param  string|null  $text
     * @param  string  $url
     */
    public function __construct(string $name, string $phone, ?string $text, string $url)
    {
        $this->name  = $name;
        $this->phone = $phone;
        $this->text  = $text;
        $this->url   = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }


}
