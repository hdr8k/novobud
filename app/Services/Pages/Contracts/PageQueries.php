<?php


namespace App\Services\Pages\Contracts;


use App\Models\Page;

interface PageQueries
{
    public function getByCurrentPage(): ?Page;

    public function getByPath(string $path): ?Page;

    public function getById(int $id): Page;
}
