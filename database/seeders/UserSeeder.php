<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Factory::create('en_US');
        $list = [];

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'username' => $faker->userName(),
                    'first_name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'password' => Hash::make('123'),
                    'email' => $faker->email(),
                    'gender' => $faker->numberBetween(0, 1),
                    'birthday' => $faker->date(),
                    'avatar' => $faker->imageUrl(600, 600),
                    'phone' => $faker->phoneNumber(),
                    'address' => $faker->address(),
                    'city' => $faker->city(),
                    'district' => $faker->city(),
                    'commune' => $faker->city(),
                    'status' => $faker->numberBetween(1, 1),
                    'active_code' => $faker->numberBetween(100000, 999999),
                ]
            );
        }

        DB::table('users')->insert($list);
    }
}
