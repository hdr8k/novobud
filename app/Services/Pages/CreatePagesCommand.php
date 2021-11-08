<?php

declare(strict_types=1);

namespace App\Services\Pages;


use App\Models\Page;

final class CreatePagesCommand
{
    public function execute(PagesDto $dto): Page
    {
        $page = new Page();

        $page->path             = $dto->getPath();
        $page->meta_title       = $dto->getMetaTitle();
        $page->meta_description = $dto->getMetaDescription();
        $page->meta_keywords    = $dto->getMetaKeywords();
        $page->content          = $dto->getContent();

        $page->save();

        return $page;
    }
}
