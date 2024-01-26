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
        Schema::create('comments', function (Blueprint $table) {

            // Tạo cột
            $table->increments('id');
            $table->string('comment', 1000);
            $table->boolean('is_active')->default(1);


            // Cột khóa ngoại
            $table->integer('user_id')->unsigned();
            $table->integer('picture_id')->unsigned();
            $table->integer('reply_to')->unsigned()->nullable();

            // Tạo liên kết khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('picture_id')->references('id')->on('pictures')->cascadeOnDelete();
            $table->foreign('reply_to')->references('id')->on('comments')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
