<?php

namespace App\Listeners;

use App\Events\CreateLidEvent;
use App\Services\CRM\Contracts\CrmApi;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BitrixLidListener
{
    private CrmApi $crmApi;

    /**
     * Create the event listener.
     *
     * @param  CrmApi  $crmApi
     */
    public function __construct(CrmApi $crmApi)
    {
        $this->crmApi = $crmApi;
    }

    /**
     * Handle the event.
     *
     * @param  CreateLidEvent  $event
     *
     * @return void
     */
    public function handle(CreateLidEvent $event): void
    {
        $this->crmApi->createLid($event->params);
    }
}
