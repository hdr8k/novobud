<?php


namespace App\Services\LayoutCoordinate\Contracts;


use App\Models\LayoutCoordinate;

interface LayoutCoordinateQueries
{
    public function getById(int $id): LayoutCoordinate;
}
