<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishersTable extends Migration
{
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->id('publisher_id');
            $table->string('publisher_name');
            $table->text('description');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publishers');
    }
}
