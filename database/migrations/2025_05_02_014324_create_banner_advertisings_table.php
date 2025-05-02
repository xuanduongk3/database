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
        Schema::create('banner_advertisings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->enum('status', ['active', 'no_active'])->default('active');
            $table->enum('position', ['homepage', 'sidebar', 'footer'])->default('homepage');
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_advertisings');
    }
};
