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
        Schema::create('products', function (Blueprint $table) {

            // Tạo cột
            $table->increments('id');
            $table->string('title', 1000);
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->float('price');

            // Cột khóa ngoại
            $table->integer('user_id')->unsigned();

            // Tạo liên kết khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
