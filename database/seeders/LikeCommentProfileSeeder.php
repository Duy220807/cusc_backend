<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeCommentProfileSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        //
        $faker = Factory::create('en_US');
        $list = [];

        $listUsers = DB::table('users')->pluck('id');
        $listCommentsProfiles = DB::table('comments_profiles')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'user_id' => $faker->randomElement($listUsers),
                    'comment_profile_id' => $faker->randomElement($listCommentsProfiles),
                ]
            );
        }

        DB::table('likes_comments_profiles')->insert($list);
    }
}
