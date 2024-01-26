<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listPayments = DB::table('payments')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'amount' => $faker->randomFloat(1, 50000, 100000),
                    'transaction_number' => $faker->numerify('num_######'),
                    'payment_id' => $faker->randomElement($listPayments)
                ]
            );
        }

        DB::table('transactions')->insert($list);
    }
}
