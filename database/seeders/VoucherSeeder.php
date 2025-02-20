<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Giảm giá 100K',
                'description' => 'Áp dụng cho đơn hàng từ 500K',
                'code' => 'DISCOUNT100',
                'discount_type' => 'fixed',
                'discount_value' => 100000,
                'min_order_value' => 500000,
                'max_discount_amount' => null,
                'start_date' => '2025-02-01',
                'end_date' => '2025-03-01',
                'quantity' => 100,
                'status' => 'active',
            ],
            [
                'name' => 'Giảm 10%',
                'description' => 'Giảm 10% tối đa 50K',
                'code' => 'SALE10',
                'discount_type' => 'percentage',
                'discount_value' => 10,
                'min_order_value' => 200000,
                'max_discount_amount' => 50000,
                'start_date' => '2025-02-05',
                'end_date' => '2025-03-05',
                'quantity' => 50,
                'status' => 'active',
            ],
            [
                'name' => 'Voucher VIP',
                'description' => 'Dành riêng cho khách hàng VIP',
                'code' => 'VIP50',
                'discount_type' => 'fixed',
                'discount_value' => 500000,
                'min_order_value' => 2000000,
                'max_discount_amount' => null,
                'start_date' => '2025-02-10',
                'end_date' => '2025-03-10',
                'quantity' => 10,
                'status' => 'active',
            ],
            [
                'name' => 'Tết Nguyên Đán',
                'description' => 'Giảm 20% tối đa 100K',
                'code' => 'TET2025',
                'discount_type' => 'percentage',
                'discount_value' => 20,
                'min_order_value' => 300000,
                'max_discount_amount' => 100000,
                'start_date' => '2025-02-01',
                'end_date' => '2025-02-20',
                'quantity' => 200,
                'status' => 'active',
            ],
            [
                'name' => 'Black Friday Deal',
                'description' => 'Siêu giảm giá Black Friday',
                'code' => 'BF2025',
                'discount_type' => 'fixed',
                'discount_value' => 150000,
                'min_order_value' => 800000,
                'max_discount_amount' => null,
                'start_date' => '2025-11-25',
                'end_date' => '2025-11-30',
                'quantity' => 500,
                'status' => 'active',
            ],
        ];

        foreach ($data as $data) {
            Voucher::create($data);
        }
    }
}
