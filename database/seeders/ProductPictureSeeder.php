<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPictureSeeder extends Seeder
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
        $listPictures = DB::table('pictures')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [

                    'product_id' => $faker->randomElement($listProducts),
                    'picture_id' => $faker->randomElement($listPictures),
                ]
            );
        }

        DB::table('products_pictures')->insert($list);
    }
}
