<?php


namespace App\Services\Categories\Contracts;


use App\Models\Category;

interface CategoryQueries
{
    public function getFilter();

    public function getById(int $id): Category;
}
