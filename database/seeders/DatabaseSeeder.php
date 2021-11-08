<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\House;
use App\Models\PhotoSlider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::factory(10)
            ->has(
                House::factory()
                    ->count(10)
                    ->has(
                        PhotoSlider::factory()
                            ->count(random_int(3, 5)),
                        'photoSliders'
                    ),
                'houses'
            )
            ->create();
    }
}
