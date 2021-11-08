<?php


namespace App\Services\LayoutCoordinate;


use App\Models\LayoutCoordinate;

class EloquentLayoutCoordinateQueries implements Contracts\LayoutCoordinateQueries
{

    public function getById(int $id): LayoutCoordinate
    {
        return LayoutCoordinate::whereId($id)
            ->with(
                'layout',
                'layout.housing',
                'layout.housing.house'
            )
            ->firstOrFail();
    }
}
