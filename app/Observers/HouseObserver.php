<?php

namespace App\Observers;

use App\Models\House;

/**
 * Class HouseObserver
 * @package App\Observers
 */
class HouseObserver
{
    /**
     * Handle the House "created" event.
     *
     * @param  House  $house
     *
     * @return void
     */
    public function creating(House $house): void
    {
        $house->additional_information = [
            'ru' => $house['translations_additional_information_ru'],
            'ua' => $house['translations_additional_information_ua'],
        ];
        unset(
            $house['translations_additional_information_ru'],
            $house['translations_additional_information_ua']
        );
    }

    public function created(House $house)
    {
    }

    /**
     * Handle the House "updated" event.
     *
     * @param  House  $house
     *
     * @return void
     */
    public function updating(House $house): void
    {
        $house->additional_information = [
            'ru' => $house['translations_additional_information_ru'],
            'ua' => $house['translations_additional_information_ua'],
        ];
        unset(
            $house['translations_additional_information_ru'],
            $house['translations_additional_information_ua']
        );
    }

    /**
     * Handle the House "deleted" event.
     *
     * @param  House  $house
     *
     * @return void
     */
    public function deleted(House $house): void
    {
        //
    }

    /**
     * Handle the House "restored" event.
     *
     * @param  House  $house
     *
     * @return void
     */
    public function restored(House $house): void
    {
        //
    }

    /**
     * Handle the House "force deleted" event.
     *
     * @param  House  $house
     *
     * @return void
     */
    public function forceDeleted(House $house): void
    {
        //
    }

    /**
     * @param  House  $house
     */
    public function save(House $house): void
    {
        dd($house->additional_information);
    }
}
