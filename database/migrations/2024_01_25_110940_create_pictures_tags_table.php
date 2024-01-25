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
        Schema::create('pictures_tags', function (Blueprint $table) {


            // Cột khóa chính
            $table->integer('picture_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['picture_id', 'tag_id']);

            // Cột khóa ngoại
            $table->foreign('picture_id')->references('id')->on('pictures')->cascadeOnDelete();
            $table->foreign('tag_id')->references('id')->on('tags_pictures')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures_tags');
    }
};
