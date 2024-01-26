<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureTagSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listPictures = DB::table('pictures')->pluck('id');
        $listTags = DB::table('tags_pictures')->pluck('id');
        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'picture_id' => $faker->randomElement($listPictures),
                    'tag_id' => $faker->randomElement($listTags)
                ]
            );
        }

        DB::table('pictures_tags')->insert($list);
    }
}
