<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentProfileSeeder extends Seeder
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


        DB::table('comments_profiles')->insert([
            'id' => 100,
            'comment' => $faker->text(255),
            'is_active' => $faker->numberBetween(1, 1),
            'user_id' => $faker->randomElement($listUsers),
            'profile_id' => $faker->randomElement($listUsers),
            'reply_to' => null
        ]);

        $listCommentProfile = DB::table('comments_profiles')->pluck('id');


        for ($i = 1; $i <= 20; $i++) {
            array_push(
                $list,
                [
                    'id' => $i,
                    'comment' => $faker->text(255),
                    'is_active' => $faker->numberBetween(1, 1),
                    'user_id' => $faker->randomElement($listUsers),
                    'profile_id' => $faker->randomElement($listUsers),
                    'reply_to' => $faker->randomElement($listCommentProfile)
                ]
            );
        }

        DB::table('comments_profiles')->insert($list);
    }
}
