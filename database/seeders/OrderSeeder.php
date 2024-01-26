<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listTransactions = DB::table('transactions')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'quantity' => $faker->randomNumber(1, 100),
                    'total' => $faker->randomFloat(1, 50000, 100000),
                    'transaction_id' => $faker->randomElement($listTransactions)
                ]
            );
        }

        DB::table('orders')->insert($list);
    }
}
