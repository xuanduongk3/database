<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id('product_detail_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('supplier_id')->constrained('suppliers', 'supplier_id');
            $table->foreignId('brand_id')->constrained('brands', 'brand_id'); 
            $table->foreignId('color_id')->constrained('colors', 'color_id');
            $table->foreignId('publisher_id')->constrained('publishers', 'publisher_id');
            $table->year('publication_year');
            $table->string('author');
            $table->string('origin');
            $table->string('language');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
