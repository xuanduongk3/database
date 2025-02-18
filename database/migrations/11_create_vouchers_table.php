<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id('voucher_id'); // Khóa chính
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('code')->unique(); // Mã voucher
            $table->integer('discount'); // Giá trị giảm
            $table->date('start_date'); // Ngày bắt đầu
            $table->date('end_date'); // Ngày kết thúc
            $table->integer('usage_limit')->nullable(); // Số lần sử dụng tối đa
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
