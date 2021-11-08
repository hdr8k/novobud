<?php

namespace App\Events;

use App\Models\House;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class HouseViewEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public House $house;

    /**
     * Create a new event instance.
     *
     * @param  House  $house
     */
    public function __construct(House $house)
    {
        $this->house = $house;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
