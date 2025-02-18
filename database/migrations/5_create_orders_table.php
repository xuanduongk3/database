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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->date('order_date');
            $table->string('payment_method');
            $table->string('status')->default('Chờ xác nhận');
            $table->bigInteger('total');
            $table->bigInteger('product_total');
            $table->bigInteger('shipping_fee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
