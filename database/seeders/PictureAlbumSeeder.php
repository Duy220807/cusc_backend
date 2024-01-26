<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listPictures = DB::table('pictures')->pluck('id');
        $listAlbums = DB::table('albums')->pluck('id');


        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [

                    'picture_id' => $faker->randomElement($listPictures),
                    'album_id' => $faker->randomElement($listAlbums)
                ]
            );
        }

        DB::table('pictures_albums')->insert($list);
    }
}
