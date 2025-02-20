<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Rating;
use App\Models\ProductReview;
use App\Models\Review;
use Faker\Factory as Faker;
class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy danh sách id của các bảng cần thiết
        $userIds    = User::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();
        $ratingIds  = Rating::pluck('id')->toArray();

        // Với mỗi user, tạo 1 bài đánh giá cho 1 sản phẩm ngẫu nhiên
        foreach ($userIds as $userId) {
            $reviewData = [
                'user_id'    => $userId,
                'product_id' => $faker->randomElement($productIds),
                'rating_id'  => $faker->randomElement($ratingIds),
                'comment'    => $faker->paragraph(2),
                'status'     => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            Review::create($reviewData);
        }
    }
}
