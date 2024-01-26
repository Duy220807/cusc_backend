<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTopicSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listProducts = DB::table('products')->pluck('id');
        $listTopics = DB::table('topics')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'product_id' => $listProducts[$i - 1],
                    'topic_id' => $faker->randomElement($listTopics)
                ]
            );
        }

        DB::table('products_topics')->insert($list);
    }
}
