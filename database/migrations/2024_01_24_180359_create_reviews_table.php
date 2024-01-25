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
        Schema::create('reviews', function (Blueprint $table) {

            // Tạo cột
            $table->increments('id');
            $table->string('comment')->nullable();
            $table->integer('rate');


            // Cột khóa ngoại
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('order_id')->unsigned();

            // Tạo liên kết khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
