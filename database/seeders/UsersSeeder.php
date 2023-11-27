<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 1) as $index) {
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'cover' => $faker->imageUrl(),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'), 
                'country_code' => $faker->countryCode,
                'mobile' => $faker->phoneNumber,
                'type' => $faker->randomElement([1, 2]),
                'extra_field' => $faker->text,
                'status' => $faker->randomElement([0, 1]),
                'roles' => $faker->text,
                // 'remember_token' => randomElement([0,9])
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
