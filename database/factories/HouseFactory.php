<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;


    public const HEATING_SYSTEMS = [
        [
            'ru' => 'Автономная',
            'ua' => 'Автономна',
        ],
        [
            'ru' => 'Воздушное отопление',
            'ua' => 'повітряне опалення',
        ],
    ];

    public const ADDITIONAL_INFORMATION = [
        'ru' => [
            'пластиковые окна',
            'Ванная комната',
            'Санузел',
        ],
        'ua' => [
            'пластикові вікна',
            'Ванна кімната',
            'санвузол',
        ],
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'name'                   => [
                'ru' => $this->faker->address,
                'ua' => $this->faker->address,
            ],
            'meta_keywords'          => [
                'ua' => $this->faker->text(20),
                'ru' => $this->faker->text(20),
            ],
            'meta_description'       => [
                'ru' => $this->faker->paragraph(2),
                'ua' => $this->faker->paragraph(2),
            ],
            'address'                => [
                'ru' => $this->faker->address,
                'ua' => $this->faker->address,
            ],
            'slug'                   => $this->faker->unique()->slug,
            'price'                  => $this->faker->numberBetween(1_000, 200_000),
            'status_color'           => $this->faker->hexColor,
            'status_text'            => [
                'ru' => $this->faker->sentence(2),
                'ua' => $this->faker->sentence(2),
            ],
            'in_index'               => $this->faker->boolean,
            'active'                 => $this->faker->boolean,
            'priority'               => $this->faker->numberBetween(1, 1000),
            'description'            => [
                'ru' => $this->faker->paragraph(12),
                'ua' => $this->faker->paragraph(12),
            ],
            'coordinate'             => $this->faker->latitude.','.$this->faker->longitude,
            'main_photo'             => 'images/main_photo/'.$this->faker
                    ->image(storage_path('app/public/images/main_photo'), 640, 480, null, false),
            'construction_end'       => [
                'ru' => '1 квартал - 2020 года',
                'ua' => '1 квартал - 2020 року',
            ],
            'apartment_areas'        => [
                'ru' => '1 - комнатная',
                'ua' => '1 - комнатна',
            ],
            'heating_systems'        => $this->faker->randomElement(self::HEATING_SYSTEMS),
            'building_structures'    => [
                'ru' => $this->faker->paragraph,
                'ua' => $this->faker->paragraph,
            ],
            'additional_information' => [
                'ru' => $this->faker
                    ->randomElements(self::ADDITIONAL_INFORMATION['ru'], random_int(1, 3)),
                'ua' => $this->faker
                    ->randomElements(self::ADDITIONAL_INFORMATION['ua'], random_int(1, 3)),
            ],
        ];
    }
}
