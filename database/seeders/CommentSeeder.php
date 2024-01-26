<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];
        $listUsers = DB::table('users')->pluck('id');
        $listPictures = DB::table('pictures')->pluck('id');

        DB::table('comments')->insert([
            'id' => 100,
            'comment' => $faker->text(50),
            'is_active' => $faker->numberBetween(1, 1),
            'user_id' => $faker->randomElement($listUsers),
            'picture_id' => $faker->randomElement($listPictures),
            'reply_to' => null
        ]);

        $listComments = DB::table('comments')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'comment' => $faker->text(50),
                    'is_active' => $faker->numberBetween(1, 1),
                    'user_id' => $faker->randomElement($listUsers),
                    'picture_id' => $faker->randomElement($listPictures),
                    'reply_to' => $faker->randomElement($listComments)
                ]
            );
        }

        DB::table('comments')->insert($list);
    }
}
