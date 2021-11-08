<?php

declare(strict_types=1);

namespace App\Services\Pages;


/**
 * Class PagesDto
 * @package App\Services\Pages
 */
final class PagesDto
{
    /**
     * @var string
     */
    private string $path;

    /**
     * @var array
     */
    private array $content;

    /**
     * @var array
     */
    private array $meta_title;

    /**
     * @var array
     */
    private array $meta_description;

    /**
     * @var array
     */
    private array $meta_keywords;

    /**
     * PagesDto constructor.
     *
     * @param  string  $path
     * @param  array  $content
     * @param  array  $meta_title
     * @param  array  $meta_description
     * @param  array  $meta_keywords
     */
    public function __construct(
        string $path,
        array $content,
        array $meta_title,
        array $meta_description,
        array $meta_keywords
    ) {
        $this->path             = $path;
        $this->content          = $content;
        $this->meta_title       = $meta_title;
        $this->meta_description = $meta_description;
        $this->meta_keywords    = $meta_keywords;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return array
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function getMetaTitle(): array
    {
        return $this->meta_title;
    }

    /**
     * @return array
     */
    public function getMetaDescription(): array
    {
        return $this->meta_description;
    }

    /**
     * @return array
     */
    public function getMetaKeywords(): array
    {
        return $this->meta_keywords;
    }
}
