<?php

namespace App\Providers;

use App\Events\CreateLidEvent;
use App\Events\HouseViewEvent;
use App\Listeners\AddViewHouseListener;
use App\Listeners\BitrixLidListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class     => [
            SendEmailVerificationNotification::class,
        ],
        CreateLidEvent::class => [
            BitrixLidListener::class,
        ],
        HouseViewEvent::class => [
            AddViewHouseListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
