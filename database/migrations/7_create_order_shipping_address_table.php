<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderShippingAddressTable extends Migration
{
    public function up()
    {
        Schema::create('order_shipping_address', function (Blueprint $table) {
            $table->id('order_shipping_address_id');
            $table->foreignId('order_id')->constrained('orders', 'order_id');
            $table->string('full_name');
            $table->string('phone');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('province');
            $table->string('district');
            $table->string('ward');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_shipping_address');
    }
}
