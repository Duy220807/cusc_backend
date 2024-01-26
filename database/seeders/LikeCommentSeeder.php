<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeCommentSeeder extends Seeder
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
        $listComments = DB::table('comments')->pluck('id');


        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'user_id' => $faker->randomElement($listUsers),
                    'comment_id' => $faker->randomElement($listComments),
                ]
            );
        }

        DB::table('likes_comments')->insert($list);
    }
}
