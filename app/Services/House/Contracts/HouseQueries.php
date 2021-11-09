<?php


namespace App\Services\House\Contracts;


use App\Models\House;

interface HouseQueries
{
    public function getById(int $id): House;

    public function getBySlug(string $slug): House;

    public function getByCategorySlug(string $slug);

    public function getInMain();

    public function getMapBy();
}
