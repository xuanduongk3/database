<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // Lấy danh sách user_id từ bảng users
        $userIds = User::where('id', '!=', 1)->pluck('id')->toArray();
        // Lấy danh sách product_id từ bảng products
        $productIds = Product::pluck('id')->toArray();

        // Số lượng đơn hàng cần tạo, ví dụ 20 đơn hàng
        $numOrders = 50;

        for ($i = 0; $i < $numOrders; $i++) {
            // Tạo phí vận chuyển ngẫu nhiên cho đơn hàng
            $shippingFee = 23000;
            // Khởi tạo mảng chứa chi tiết đơn hàng và subtotal ban đầu = 0
            $orderDetailsData = [];
            $subtotal = 0;
            // Số sản phẩm trong đơn hàng: từ 1 đến 3
            $numProducts = $faker->numberBetween(1, 3);

            for ($j = 0; $j < $numProducts; $j++) {
                // Chọn một product ngẫu nhiên
                $productId = $faker->randomElement($productIds);
                $product = Product::find($productId);
                if (!$product) {
                    continue;
                }
                
                // Số lượng mua từ 1 đến 5
                $quantity = $faker->numberBetween(1, 5);
                // Lấy giá gốc và discount của sản phẩm
                $originalPrice = $product->price;
                $discountPercent = $product->discount_price; // discount_price được hiểu là % giảm giá

                // Tính giá bán hiệu chỉnh theo discount: nếu discount_percent > 0
                $effectivePrice = $originalPrice * (1 - ($discountPercent / 100));
                // Tổng tiền của sản phẩm này trong đơn hàng
                $totalDetail = $effectivePrice * $quantity;
                // Cộng dồn subtotal
                $subtotal += $totalDetail;

                $orderDetailsData[] = [
                    'product_id' => $productId,
                    'quantity'   => $quantity,
                    'price'      => $effectivePrice,
                    'total'      => $totalDetail,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Tổng tiền đơn hàng = subtotal + phí vận chuyển
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

            // Gán order_id cho từng chi tiết đơn hàng và insert
            foreach ($orderDetailsData as &$detail) {
                $detail['order_id'] = $orderId;
            }
            DB::table('order_details')->insert($orderDetailsData);
        }
    }
}