<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; 
use App\Models\Flashsale; 

class FlashsaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Lấy danh sách sản phẩm
        $products = Product::all();

        // Tạo flash sale cho mỗi sản phẩm
        foreach ($products as $product) {
            Flashsale::create([
                'discount' => rand(10, 50), // Giảm giá ngẫu nhiên từ 10% đến 50%
                'product_id' => $product->product_id,
                'start_date' => now()->subDays(rand(1, 5)), // Bắt đầu cách đây 1-5 ngày
                'end_date' => now()->addDays(rand(1, 30)),  // Kết thúc sau 1-10 ngày
            ]);
        }
    }
}
