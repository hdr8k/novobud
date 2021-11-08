<?php

namespace App\Providers;

use App\Models\House;
use App\Nova\Category;
use App\Nova\Housing;
use App\Nova\Layout;
use App\Nova\LayoutCoordinate;
use App\Nova\Page;
use App\Observers\HouseObserver;
use Illuminate\Support\Facades\Gate;
use Larabug\NovaLarabugTool\NovaLarabugTool;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::sortResourcesBy(function ($resource) {
            return $resource::$priority ?? 9999;
        });

        Nova::serving(function () {
            House::observe(HouseObserver::class);
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'test@test.test',
                'admin@admin.admin',
                'novobud@novobud.pl.ua',
            ], true);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaLarabugTool,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
