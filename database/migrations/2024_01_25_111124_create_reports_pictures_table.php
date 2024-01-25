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
        Schema::create('reports_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 255);
            $table->string('status', 50);



            // Cột khóa ngoại
            $table->integer('user_id')->unsigned();
            $table->integer('picture_id')->unsigned();

            // Tạo liên kết khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('picture_id')->references('id')->on('pictures')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports_pictures');
    }
};
