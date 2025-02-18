<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
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

        // Lấy tất cả sản phẩm
        $products = Product::all();

        // Lấy tất cả các rating có sẵn
        $ratings = Rating::all();

        foreach ($users as $user) {
            // Mỗi khách hàng có thể đánh giá một số sản phẩm ngẫu nhiên
            $reviewedProducts = $products->random(rand(1, 5)); // Chọn ngẫu nhiên 1-5 sản phẩm

            foreach ($reviewedProducts as $product) {
                // Chọn ngẫu nhiên một rating_id từ bảng ratings
                $rating = $ratings->random();

                // Tạo một comment ngẫu nhiên
                $comment = $faker->sentence;

                // Trạng thái review (có thể là duyệt hoặc chưa duyệt)
                $status = rand(0, 1);

                // Tạo review cho sản phẩm
                Review::create([
                    'user_id' => $user->user_id,
                    'product_id' => $product->product_id,
                    'rating_id' => $rating->rating_id, // Dùng rating_id từ bảng ratings
                    'comment' => $comment,
                    'status' => $status,
                ]);
            }
        }
    }
}
