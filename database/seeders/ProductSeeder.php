<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listUsers = DB::table('users')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'title' => $faker->text(20),
                    'description' => $faker->text(250),
                    'quantity' => $faker->numberBetween(1, 100),
                    'price' => $faker->randomFloat(1, 50000, 100000),
                    'user_id' => $faker->randomElement($listUsers)
                ]
            );
        }

        DB::table('products')->insert($list);
    }
}
