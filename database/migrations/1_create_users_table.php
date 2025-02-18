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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->boolean('gender');
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('customer');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->string('address')->nullable();
            $table->boolean('firstlogin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
