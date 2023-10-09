<?php


namespace App\Services\House;


use App\Models\House;
use App\Services\House\Contracts\HouseQueries;
use App\Services\House\DTOs\MapDto;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class EloquentHouseQueries
 * @package App\Services\House
 */
class EloquentHouseQueries implements HouseQueries
{

    /**
     * @param int $id
     *
     * @return House
     */
    public function getById(int $id): House
    {
        $house = House::whereId($id)->first();
        if (!$house) {
            abort(404);
        }

        return $house;
    }

    /**
     * @return House[]|Collection
     */
    public function getInMain()
    {
        return House::whereActive(1)
            ->with('category')
            ->where('in_index', 1)
            ->orderByDesc('priority')
            ->get();
    }

    /**
     * @return MapDto[]|\Illuminate\Support\Collection
     */
    public function getMapBy()
    {
        $houses = House::whereActive(1)
            ->with('category')
            ->get([
                'address',
                'main_photo',
                'category_id',
                'price',
                'coordinate',
                'slug',
            ]);

        return $houses->map(static fn(House $house) => new MapDto(
            $house->address,
            $house->main_photo_url,
            $house->price,
            $house->category,
            $house->coordinate,
            $house->slug
        ));
    }

    public function getBySlug(string $slug): House
    {
        $house = House::whereSlug($slug)
            ->with(
                'category',
                'photoSliders',
                'housings',
                'housings.layouts',
                'housings.layouts.layoutCoordinates'
            )
            ->first();
        if (!$house) {
            abort(404);
        }

        return $house;
    }

    public function getByCategorySlug(string $slug)
    {
        $houses = House::whereHas('category', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->with(
            'category',
            'photoSliders',
            'housings',
            'housings.layouts',
            'housings.layouts.layoutCoordinates'
        ) ->orderByDesc('priority')->get();

        return $houses;
    }
}
