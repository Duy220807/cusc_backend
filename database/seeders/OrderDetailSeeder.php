<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listPictures = DB::table('pictures')->pluck('id');
        $listProducts = DB::table('products')->pluck('id');
        $listOrders = DB::table('orders')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'price' => $faker->randomFloat(1, 50000, 100000),
                    'picture_id' => $faker->randomElement($listPictures),
                    'product_id' => $faker->randomElement($listProducts),
                    'order_id' => $faker->randomElement($listOrders)
                ]
            );
        }

        DB::table('order_details')->insert($list);
    }
}
