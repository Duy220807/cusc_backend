<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];
        $payments = ['COD', 'Credit Cart', 'Wallet'];

        for ($i = 1; $i <= 3; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'name' => $payments[$i - 1]
                ]
            );
        }

        DB::table('payments')->insert($list);
    }
}
