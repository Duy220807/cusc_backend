<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportProductSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listUsers = DB::table('users')->pluck('id');
        $listProduct = DB::table('products')->pluck('id');
        $status = ['Deleted', 'Not Delete'];
        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'description' => $faker->text(255),
                    'status' => $faker->randomElement($status),
                    'user_id' => $faker->randomElement($listUsers),
                    'product_id' => $faker->randomElement($listProduct),
                ]
            );
        }

        DB::table('reports_products')->insert($list);
    }
}
