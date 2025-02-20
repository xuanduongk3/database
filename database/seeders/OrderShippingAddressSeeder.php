<?php

namespace Database\Seeders;

use App\Models\OrderShippingAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use Faker\Factory as Faker;
class OrderShippingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Danh sách mẫu địa chỉ Việt Nam
        $provinces = ['Hà Nội', 'Hồ Chí Minh', 'Đà Nẵng', 'Cần Thơ', 'Huế'];
        $districts = ['Quận 1', 'Quận 3', 'Quận 5', 'Quận 7', 'Quận Bình Thạnh'];
        $wards = ['Phường Bến Nghé', 'Phường Tân Định', 'Phường Cầu Kho', 'Phường An Phú', 'Phường Thảo Điền'];

        // Lấy tất cả các đơn hàng đã tạo
        $orders = Order::all();

        foreach ($orders as $order) {
            // Lấy thông tin user của đơn hàng
            $user = User::find($order->user_id);

            // Nếu user có trường first_name và last_name, dùng chúng; nếu không, tạo ngẫu nhiên
            if ($user && isset($user->first_name) && isset($user->last_name)) {
                $fullName = $user->firstname . ' ' . $user->lastname;
            } else {
                $fullName = $faker->firstName . ' ' . $faker->lastName;
            }

            // Tạo số điện thoại: bắt đầu bằng 0 và có tổng 10 chữ số
            $phone = '0' . $faker->numerify('#########');

            // Tạo dữ liệu địa chỉ
            $addressData = [
                'order_id'      => $order->id,
                'full_name'     => $fullName,
                'phone'         => $phone,
                'province'      => $faker->randomElement($provinces),
                'district'      => $faker->randomElement($districts),
                'ward'          => $faker->randomElement($wards),
                'address_line1' => $faker->streetAddress,
                'created_at'    => now(),
                'updated_at'    => now(),
            ];

            OrderShippingAddress::create($addressData);
        }
    }
}
