<?php

namespace Database\Seeders;

use App\Models\Flashsale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Đọc file JSON
        $json = File::get(database_path('data/products.json'));
        $data = json_decode($json, true);

        // Nhập dữ liệu vào bảng an_pham
        foreach ($data as $item) {
            $product = Product::create($item);

            Flashsale::create([
                'product_id' => $product->product_id,
                'discount_price' => rand(10, 50),
                'quantity' => rand(5, 20), // Giảm giá ngẫu nhiên từ 10% đến 50%
                'start_date' => now(),
                'end_date' => now()->addDays(rand(3, 10)), // Kết thúc sau 3-10 ngày
            ]);
        }
    }
}
