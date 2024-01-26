<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PictureSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(PictureAlbumSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(PictureTopicSeeder::class);
        $this->call(TagPictureSeeder::class);
        $this->call(PictureTagSeeder::class);
        $this->call(ReportPictureSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(LikeCommentSeeder::class);
        $this->call(ReportCommentSeeder::class);
        $this->call(FollowSeeder::class);
        $this->call(CommentProfileSeeder::class);
        $this->call(LikeCommentProfileSeeder::class);
        $this->call(ReportCommentProfileSeeder::class);
        $this->call(ProductPictureSeeder::class);
        $this->call(ProductTopicSeeder::class);
        $this->call(PositionTypeSeeder::class);
        $this->call(TagProductSeeder::class);
        $this->call(ProductTagSeeder::class);
        $this->call(ReportProductSeeder::class);
        $this->call(HistoryPositionSeeder::class);
        $this->call(RecentViewSeeder::class);
        $this->call(SearchHistorySeeder::class);
    }
}
