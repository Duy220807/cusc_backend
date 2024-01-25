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
        Schema::create('transactions', function (Blueprint $table) {

            // Tạo cột
            $table->increments('id');
            $table->integer('amount');
            $table->string('transaction_number', 10);


            // Cột khóa ngoại
            $table->integer('payment_id')->unsigned();

            // Tạo liên kết khóa ngoại
            $table->foreign('payment_id')->references('id')->on('payments')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
