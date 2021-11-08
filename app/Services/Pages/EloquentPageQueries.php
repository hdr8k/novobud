<?php


namespace App\Services\Pages;


use App\Models\Page;

final class EloquentPageQueries implements Contracts\PageQueries
{

    public function getByCurrentPage(): ?Page
    {
        return Page::wherePath(url()->current())->firstOrFail();
    }

    public function getByPath(string $path): ?Page
    {
        return Page::wherePath($path)->first();
    }

    public function getById(int $id): Page
    {
        return Page::whereId($id)->firstOrFail();
    }
}
