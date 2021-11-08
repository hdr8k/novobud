<?php

namespace App\Http\Controllers;

use App\Services\House\Contracts\HouseQueries;
use App\Services\House\EloquentHouseQueries;
use App\Services\Pages\EloquentPageQueries;
use App\Services\Pages\SeoToolPageHandle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class MapController
 * @package App\Http\Controllers
 */
class MapController extends Controller
{
    /**
     * @param  HouseQueries  $houseQueries
     *
     * @param  SeoToolPageHandle  $seoToolPageHandle
     *
     * @return Application|Factory|View
     */
    public function index(HouseQueries $houseQueries, SeoToolPageHandle $seoToolPageHandle)
    {
        $seoToolPageHandle->setSeoByStaticPage('novostrojki-na-karte.html');
        return view('map.index', [
            'houses' => $houseQueries->getMapBy(),
        ]);
    }
}
