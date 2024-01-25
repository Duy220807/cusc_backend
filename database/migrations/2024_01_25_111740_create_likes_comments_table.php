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
        Schema::create('likes_comments', function (Blueprint $table) {
            $table->id();


            // Cột khóa ngoại
            $table->integer('user_id')->unsigned();
            $table->integer('comment_id')->unsigned();

            // Tạo liên kết khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('comment_id')->references('id')->on('comments')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes_comments');
    }
};
