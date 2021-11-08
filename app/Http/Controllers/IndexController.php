<?php

namespace App\Http\Controllers;

use App\Services\Categories\Contracts\CategoryQueries;
use App\Services\House\Contracts\HouseQueries;
use App\Services\Pages\SeoToolPageHandle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @param  SeoToolPageHandle  $seoToolPageHandle
     *
     * @return Application|Factory|View
     */
    public function aboutTheProject(SeoToolPageHandle $seoToolPageHandle)
    {
        $seoToolPageHandle->setSeoByStaticPage('o-proekte.html');

        return view('home.about_the_project');
    }

    /**
     * @param  SeoToolPageHandle  $seoToolPageHandle
     *
     * @return Application|Factory|View
     */
    public function contacts(SeoToolPageHandle $seoToolPageHandle)
    {
        $seoToolPageHandle->setSeoByStaticPage('novostoroyki-poltava-kontakty.html');

        return view('contacts.index');
    }
}
