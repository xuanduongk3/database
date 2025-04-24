<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lấy danh sách user_id từ bảng users (loại trừ admin id = 1)
        $userIds = User::where('id', '!=', 1)->pluck('id')->toArray();

        // Lấy danh sách product_id từ bảng products
        $productIds = Product::pluck('id')->toArray();

        // Số lượng đơn hàng cần tạo, ví dụ 50 đơn hàng
        $numOrders = 50;

        for ($i = 0; $i < $numOrders; $i++) {
            $shippingFee = 23000; // Phí vận chuyển cố định
            $orderDetailsData = []; // Danh sách chi tiết đơn hàng
            $subtotal = 0; // Tổng tiền sản phẩm
            $usedProductIds = []; // Danh sách product_id đã dùng để tránh trùng

            // Mỗi đơn hàng có từ 1 đến 3 sản phẩm khác nhau
            $numProducts = $faker->numberBetween(1, 3);

            while (count($orderDetailsData) < $numProducts) {
                $productId = $faker->randomElement($productIds);

                // Nếu sản phẩm đã có trong đơn, bỏ qua
                if (in_array($productId, $usedProductIds)) {
                    continue;
                }

                // Lấy thông tin sản phẩm
                $product = Product::find($productId);
                if (!$product) continue;

                // Đánh dấu sản phẩm đã được sử dụng
                $usedProductIds[] = $productId;

                // Số lượng ngẫu nhiên từ 1–5
                $quantity = $faker->numberBetween(1, 5);

                // Tính giá sau giảm giá
                $originalPrice = $product->price;
                $discountPercent = $product->discount_price;
                $effectivePrice = $originalPrice * (1 - ($discountPercent / 100));

                // Tổng tiền chi tiết
                $totalDetail = $effectivePrice * $quantity;
                $subtotal += $totalDetail;

                // Thêm vào danh sách chi tiết đơn hàng
                $orderDetailsData[] = [
                    'product_id' => $productId,
                    'quantity'   => $quantity,
                    'price'      => $effectivePrice,
                    'total'      => $totalDetail,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Tổng tiền đơn hàng = subtotal + phí ship
            $totalPrice = $subtotal + $shippingFee;

            // Tạo đơn hàng
            $orderId = DB::table('orders')->insertGetId([
                'user_id'        => $faker->randomElement($userIds),
                'total_price'    => $totalPrice,
                'shipping_fee'   => $shippingFee,
                'payment_method' => $faker->randomElement(['Tiền mặt', 'Chuyển khoản ngân hàng', 'MoMo']),
                'status'         => $faker->randomElement(['Chờ xác nhận', 'Chuẩn bị hàng', 'Đang giao hàng', 'Đã giao hàng']),
                'order_date'     => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            // Gắn order_id vào từng chi tiết và insert
            foreach ($orderDetailsData as &$detail) {
                $detail['order_id'] = $orderId;
            }

            DB::table('order_details')->insert($orderDetailsData);
        }
    }
}
