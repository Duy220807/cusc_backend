<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pictures_albums', function (Blueprint $table) {


            // Cột khóa chính
            $table->integer('album_id')->unsigned();
            $table->integer('picture_id')->unsigned();
            $table->primary(['album_id', 'picture_id']);

            // Cột khóa ngoại
            $table->foreign('album_id')->references('id')->on('albums')->cascadeOnDelete();
            $table->foreign('picture_id')->references('id')->on('pictures')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures_albums');
    }
};
