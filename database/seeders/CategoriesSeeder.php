<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

use Faker\Factory as Faker; // Importa la classe Faker


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::truncate();
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            Categories::create([
                'name' => $faker->word,
                'title_color' => $faker->hexColor,
                'url_slugs' => $faker->slug,
                'order_id' => $faker->randomNumber(2),
                'cover' => $faker->imageUrl(),
                'translations' => json_encode(['en' => $faker->sentence, 'it' => $faker->sentence]),
                'extra_field' => $faker->text,
                'status' => $faker->randomElement([0, 1]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
