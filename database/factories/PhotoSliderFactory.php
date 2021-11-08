<?php

namespace Database\Factories;

use App\Models\PhotoSlider;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoSliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhotoSlider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => 'images/slider/'.$this->faker
                    ->image(
                        storage_path('app/public/images/slider'),
                        640, 480, null, false),
        ];
    }
}
