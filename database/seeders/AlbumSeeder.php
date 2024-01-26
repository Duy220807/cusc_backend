<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('en_US');
        $list = [];

        $listUsers = DB::table('users')->pluck('id');


        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'name' => $faker->text(20),
                    'is_public' => $faker->randomNumber(1, 1),
                    'user_id' => $faker->randomElement($listUsers),
                ]
            );
        }

        DB::table('albums')->insert($list);
        //
    }
}
