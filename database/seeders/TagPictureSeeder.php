<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagPictureSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];


        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'name' => $faker->text(20),
                ]
            );
        }

        DB::table('tags_pictures')->insert($list);
    }
}
