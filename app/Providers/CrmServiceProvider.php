<?php

namespace App\Providers;

use App\Services\CRM\Bitrix\BitrixApi;
use App\Services\CRM\Contracts\CrmApi;
use Illuminate\Support\ServiceProvider;

class CrmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CrmApi::class, BitrixApi::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
