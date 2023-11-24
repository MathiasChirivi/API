<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banners;

use Faker\Factory as Faker; // Importa la classe Faker


class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Genera dati casuali per la tabella banners
        foreach (range(1, 8) as $index) {
            Banners::create([
                'cover' => $faker->imageUrl(),
                'type' => $faker->randomElement([1, 2]),
                'position' => $faker->numberBetween(1, 3),
                'value' => $faker->text,
                'text' => $faker->sentence,
                'start_time' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'end_time' => $faker->dateTimeBetween('+2 months', '+6 months'),
                'extra_field' => $faker->optional()->text,
                'status' => $faker->randomElement([0, 1]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
