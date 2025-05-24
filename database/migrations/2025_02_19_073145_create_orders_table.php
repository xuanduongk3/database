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
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->decimal('total_price', 10, 2);
            $table->decimal('shipping_fee', 10, 2);
            $table->string('payment_method')->default('Tiền mặt');
            $table->boolean('is_payment')->default(false);
            $table->enum('status', ['Chờ xác nhận', 'Chuẩn bị hàng', 'Đang giao hàng', 'Đã giao hàng'])->default('Chờ xác nhận');
            $table->date('order_date')->default(now());
            $table->date('order_payment')->default(now());
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
