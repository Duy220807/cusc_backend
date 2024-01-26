<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('en_US');
        $list = [];

        $listPictures = DB::table('pictures')->pluck('id');
        $listTopics = DB::table('topics')->pluck('id');


        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [

                    'picture_id' => $faker->randomElement($listPictures),
                    'topic_id' => $faker->randomElement($listTopics)
                ]
            );
        }

        DB::table('pictures_topics')->insert($list);
    }
}
