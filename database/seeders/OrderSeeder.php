<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
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

        // Faker để tạo ngày tháng
        $faker = Faker::create();

        // Các phương thức thanh toán và trạng thái đơn hàng
        $paymentMethods = ['momo', 'bank', 'cash'];
        $statuses = ['Chờ xác nhận', 'Đang chuẩn bị hàng', 'Đang giao hàng', 'Đã giao hàng'];

        foreach ($users as $user) {
            // Random số lượng đơn hàng (10 đến 20 đơn hàng)
            $orderCount = rand(10, 20);

            for ($i = 0; $i < $orderCount; $i++) {
                // Tạo đơn hàng
                $orderDate = $faker->dateTimeBetween('2024-01-01', '2024-12-31');
                $order = Order::create([
                    'user_id' => $user->user_id,
                    'order_date' => $orderDate,
                    'status' => $statuses[array_rand($statuses)], // Random trạng thái
                    'payment_method' => $paymentMethods[array_rand($paymentMethods)], // Random phương thức thanh toán
                    'total' => 0, // Tổng sẽ được tính sau
                    'shipping_fee' => 0, // Phí vận chuyển sẽ được tính sau
                    'product_total' => 0, // Tổng tiền sản phẩm sẽ được tính sau
                ]);

                // Random số lượng sản phẩm trong đơn hàng (3 đến 8 sản phẩm)
                $productTotal = 0;
                $productCount = rand(3, 8);
                $addedProducts = []; // Mảng để theo dõi sản phẩm đã thêm

                for ($j = 0; $j < $productCount; $j++) {
                    // Random sản phẩm (Chọn một sản phẩm ngẫu nhiên từ bảng products)
                    $product = Product::inRandomOrder()->first();

                    // Kiểm tra sản phẩm đã được thêm vào đơn hàng chưa
                    if (isset($addedProducts[$product->product_id])) {
                        // Nếu sản phẩm đã tồn tại, tăng số lượng
                        $existingDetail = $addedProducts[$product->product_id];
                        $existingDetail->quantity += rand(1, 5);
                        $existingDetail->price = $existingDetail->quantity * $product->price;
                        $existingDetail->save();

                        // Cập nhật tổng tiền sản phẩm
                        $productTotal += $existingDetail->price - ($existingDetail->price / $existingDetail->quantity * ($existingDetail->quantity - rand(1, 5)));
                    } else {
                        // Nếu sản phẩm chưa tồn tại, tạo chi tiết đơn hàng mới
                        $quantity = rand(1, 5);
                        $price = $product->price * $quantity;
                        $productTotal += $price;

                        $orderDetail = OrderDetail::create([
                            'order_id' => $order->order_id,
                            'product_id' => $product->product_id,
                            'quantity' => $quantity,
                            'price' => $price,
                        ]);

                        // Thêm sản phẩm vào mảng đã thêm
                        $addedProducts[$product->product_id] = $orderDetail;
                    }
                }

                // Tính phí vận chuyển dựa trên tổng tiền sản phẩm
                $shippingFee = 0;
                if ($productTotal < 100000) {
                    $shippingFee = 30000;
                } elseif ($productTotal >= 100000 && $productTotal < 500000) {
                    $shippingFee = 20000; // Trường hợp bổ sung
                } elseif ($productTotal >= 500000 && $productTotal <= 1000000) {
                    $shippingFee = 10000;
                } else { // $productTotal > 1000000
                    $shippingFee = 0;
                }

                // Tổng giá trị đơn hàng bao gồm phí vận chuyển
                $totalWithShipping = $productTotal + $shippingFee;

                // Cập nhật tổng giá trị đơn hàng, phí vận chuyển, và tổng tiền sản phẩm
                $order->update([
                    'total' => $totalWithShipping,
                    'shipping_fee' => $shippingFee,
                    'product_total' => $productTotal,
                ]);
            }
        }
    }
}
