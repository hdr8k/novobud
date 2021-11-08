<?php

namespace App\Listeners;

use App\Events\HouseViewEvent;
use App\Models\House;

class AddViewHouseListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HouseViewEvent  $houseViewEvent
     *
     * @return void
     */
    public function handle(HouseViewEvent $houseViewEvent)
    {
        $house = $houseViewEvent->house;
        $house->increment('view');
        $house->save();
    }
}
