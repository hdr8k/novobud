<?php

namespace App\Providers;

use App\Services\Categories\Contracts\CategoryQueries;
use App\Services\Categories\EloquentCategoryQueries;
use App\Services\House\Contracts\HouseQueries;
use App\Services\House\EloquentHouseQueries;
use App\Services\LayoutCoordinate\Contracts\LayoutCoordinateQueries;
use App\Services\LayoutCoordinate\EloquentLayoutCoordinateQueries;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HouseQueries::class,
            EloquentHouseQueries::class);

        $this->app->bind(CategoryQueries::class,
            EloquentCategoryQueries::class);

        $this->app->bind(LayoutCoordinateQueries::class,
            EloquentLayoutCoordinateQueries::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
