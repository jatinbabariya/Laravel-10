<?php

namespace Database\Seeders;

use App\Models\City;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            City::create([
                'c_name' => $faker->city,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
