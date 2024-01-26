<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
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
        $listProducts = DB::table('products')->pluck('id');
        $listOrders = DB::table('orders')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'comment' => $faker->text(255),
                    'rate' => $faker->randomNumber(1, 5),
                    'user_id' => $faker->randomElement($listUsers),
                    'product_id' => $faker->randomElement($listProducts),
                    'order_id' => $faker->randomElement($listOrders)
                ]
            );
        }

        DB::table('reviews')->insert($list);
    }
}
