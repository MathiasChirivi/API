<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory as Faker; // Importa la classe Faker

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::truncate();
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            News::create([
                'cate_id' => $faker->numberBetween(1, 1),
                'city_id' => $faker->numberBetween(1, 1),
                'sub_cate_id' => $faker->numberBetween(1, 3),
                'author_id' => $faker->numberBetween(1, 5),
                'title' => $faker->sentence,
                'url_slugs' => $faker->slug,
                'cover' => $faker->imageUrl(),
                'video_url' => $faker->optional()->url,
                'content' => $faker->paragraphs(3, true),
                'short_descriptions' => $faker->text(200),
                'likes' => $faker->numberBetween(0, 100),
                'comments' => $faker->numberBetween(0, 50),
                'share_content' => $faker->optional()->text,
                'translations' => $faker->optional()->text,
                'seo_tags' => $faker->words(5, true),
                'extra_field' => $faker->optional()->text,
                'status' => $faker->numberBetween(0, 1),
                'coordinates' => $faker->latitude . ', ' . $faker->longitude,
                'live_url' => $faker->url,
                'main_characters' => $faker->optional()->words(3),
            ]);
        }
    }
}
