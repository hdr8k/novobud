<?php

namespace App\Http\Controllers;

use App\Events\HouseViewEvent;
use App\Services\Categories\Contracts\CategoryQueries;
use App\Services\House\Contracts\HouseQueries;
use App\Services\LayoutCoordinate\EloquentLayoutCoordinateQueries;
use App\Services\Pages\SeoToolPageHandle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HouseController extends Controller
{
    /**
     * @param HouseQueries $houseQueries
     *
     * @param CategoryQueries $categoryQueries
     *
     * @param SeoToolPageHandle $seoToolPageHandle
     *
     * @return Application|Factory|View
     */
    public function index(
        HouseQueries      $houseQueries,
        CategoryQueries   $categoryQueries,
        SeoToolPageHandle $seoToolPageHandle
    )
    {
        return view('buildings.index', [
            'houses' => $houseQueries->getInMain(),
            'categories' => $categoryQueries->getFilter(),
            'page' => $seoToolPageHandle->setSeoByStaticPage('/'),
        ]);
    }


    public function getBySlug(HouseQueries $houseQueries, SeoToolPageHandle $seoToolPageHandle, string $slug)
    {
        $house = $houseQueries->getBySlug($slug);

        $seoToolPageHandle->setSeoByArray([
            'title' => $house->name,
            'description' => $house->meta_description,
            'meta_keywords' => $house->meta_keywords,
        ]);

        event(new HouseViewEvent($house));

        return view('buildings.building', [
            'house' => $house,
        ]);
    }

    public function printRoom(EloquentLayoutCoordinateQueries $coordinateQueries, string $id)
    {
        return view('buildings.print', [
            'room' => $coordinateQueries->getById((int)$id),
        ]);
    }

    public function getCategory(CategoryQueries $categoryQueries, HouseQueries $houseQueries, SeoToolPageHandle $seoToolPageHandle, string $slug)
    {
        $category = $categoryQueries->getBySlugWithHouses($slug);

        $seoToolPageHandle->setSeoByArray([
            'title' => $category->name,
            'description' => $category->meta_description,
            'meta_keywords' => $category->meta_keywords,
        ]);

        return view('buildings.index', [
            'houses' => $houseQueries->getByCategorySlug($slug),
            'categories' => $categoryQueries->getFilter(),
            'page' => $seoToolPageHandle,
            'category' => $category
        ]);

    }
}
