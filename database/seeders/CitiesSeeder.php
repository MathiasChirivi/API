<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cities;

use Faker\Factory as Faker; // Importa la classe Faker


class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::truncate();
        $faker = Faker::create();

        foreach (range(1, 37) as $index) {
            Cities::create([
                'name' => $faker->city,
                'cover' => $faker->imageUrl(),
                'lat' => $faker->latitude,
                'lng' => $faker->longitude,
                'extra_field' => $faker->text,
                'status' => $faker->randomElement([0, 1]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
