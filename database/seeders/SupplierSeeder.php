<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'supplier_name' => 'Nhà Xuất Bản Kim Đồng'
            ],
            [
                'supplier_name' => 'NXB Trẻ'
            ],
            [
                'supplier_name' => 'Đinh Tị'
            ],
            [
                'supplier_name' => 'Nhã Nam'
            ],
            [
                'supplier_name' => 'Tân Việt'
            ],
            [
                'supplier_name' => 'Thái Hà'
            ],
            [
                'supplier_name' => 'Penguin Books'
            ],
            [
                'supplier_name' => 'Minh Long'
            ],
            [
                'supplier_name' => 'NXB Tổng Hợp TPHCM'
            ],
            [
                'supplier_name' => 'Cty Văn Hóa Sách Việt'
            ],
            [
                'supplier_name' => 'AZ Việt Nam'
            ],
            [
                'supplier_name' => 'Văn Phòng Phẩm Stabilo'
            ],
            [
                'supplier_name' => 'Cty Văn Hóa Việt Thư'
            ],

        ];
        foreach($data as $data){
            Supplier::create($data);
        }
    }
}
