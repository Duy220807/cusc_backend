<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment', 1000);


            // Cột khóa ngoại
            $table->integer('profile_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('reply_to')->unsigned();

            // Tạo liên kết khóa ngoại
            $table->foreign('profile_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('reply_to')->references('id')->on('comments_profiles')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows_comments_profile');
    }
};
