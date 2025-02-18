<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lấy tất cả khách hàng
        $users = User::where('role', 'customer')->get();

        // Faker để tạo dữ liệu ngẫu nhiên
        $faker = Faker::create();

        foreach ($users as $user) {
            // Random số lượng sản phẩm trong giỏ hàng (2 đến 5 sản phẩm)
            $cartCount = rand(2, 5);

            for ($i = 0; $i < $cartCount; $i++) {
                // Random sản phẩm (Chọn một sản phẩm ngẫu nhiên từ bảng products)
                $product = Product::inRandomOrder()->first();
                // Random số lượng sản phẩm (1 đến 5)
                $quantity = rand(1, 5);

                // Tạo mục giỏ hàng
                Cart::create([
                    'user_id' => $user->user_id,
                    'product_id' => $product->product_id,
                    'quantity' => $quantity,
                ]);
            }
        }
    }
}
