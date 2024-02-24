<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            $cityId = rand(1, 100);
            $userId =  User::insertGetId([
                'u_name' => $faker->name,
                'u_contact' => $faker->phoneNumber,
                'u_email' => $faker->unique()->safeEmail,
                'u_password' => Hash::make($faker->password),
                'created_at' => Carbon::now()
            ]);
            Address::create([
                'add_address' => $faker->address,
                'u_id' => $userId,
                'c_id' => $cityId, 'created_at' => Carbon::now()
            ]);
        }
    }
}
