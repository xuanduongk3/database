<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_name' => 'Nhà Xuất Bản Kim Đồng',
                'phone' => '024-39364930',
                'address' => '55 Quang Trung, Hoàn Kiếm, Hà Nội',
                'email' => 'contact@kimdong.vn',
            ],
            [
                'supplier_name' => 'NXB Trẻ',
                'phone' => '028-38297806',
                'address' => '161B Lý Chính Thắng, Phường 7, Quận 3, TP.HCM',
                'email' => 'nxbtre@nxbtre.com.vn',
            ],
            [
                'supplier_name' => 'Đinh Tị',
                'phone' => '024-37955554',
                'address' => 'Số 26, Ngõ 186 Khương Trung, Thanh Xuân, Hà Nội',
                'email' => 'info@dinhtibooks.com.vn',
            ],
            [
                'supplier_name' => 'Nhã Nam',
                'phone' => '024-37956686',
                'address' => 'Số 59 Đỗ Quang, Trung Hòa, Cầu Giấy, Hà Nội',
                'email' => 'info@nhanam.vn',
            ],
            [
                'supplier_name' => 'Tân Việt',
                'phone' => '024-35145336',
                'address' => 'Số 2 Duy Tân, Cầu Giấy, Hà Nội',
                'email' => 'info@tanviet.vn',
            ],
            [
                'supplier_name' => 'Thái Hà',
                'phone' => '024-37912623',
                'address' => '53 Phạm Thận Duật, Mai Dịch, Cầu Giấy, Hà Nội',
                'email' => 'contact@thaihabooks.com',
            ],
            [
                'supplier_name' => 'Penguin Books',
                'phone' => '+44 20 7139 3000',
                'address' => '80 Strand, London, UK',
                'email' => 'info@penguinrandomhouse.com',
            ],
            [
                'supplier_name' => 'Minh Long',
                'phone' => '028-39250156',
                'address' => 'Số 51 Trần Nhân Tôn, Quận 5, TP.HCM',
                'email' => 'contact@minhlongbook.vn',
            ],
            [
                'supplier_name' => 'NXB Tổng Hợp TPHCM',
                'phone' => '028-39310394',
                'address' => '62 Nguyễn Thị Minh Khai, Quận 1, TP.HCM',
                'email' => 'info@nxbhcm.vn',
            ],
            [
                'supplier_name' => 'Cty Văn Hóa Sách Việt',
                'phone' => '028-39295550',
                'address' => '87 Nguyễn Văn Trỗi, Phú Nhuận, TP.HCM',
                'email' => 'contact@sachviet.vn',
            ],
            [
                'supplier_name' => 'AZ Việt Nam',
                'phone' => '024-38395533',
                'address' => 'Số 10, Nguyễn Xiển, Thanh Xuân, Hà Nội',
                'email' => 'info@azvietnam.vn',
            ],
            [
                'supplier_name' => 'Văn Phòng Phẩm Stabilo',
                'phone' => '028-38775900',
                'address' => '28 Lý Chính Thắng, Quận 3, TP.HCM',
                'email' => 'info@stabilo.vn',
            ],
            [
                'supplier_name' => 'Cty Văn Hóa Việt Thư',
                'phone' => '024-37286688',
                'address' => 'Số 23 Nguyễn Chí Thanh, Ba Đình, Hà Nội',
                'email' => 'contact@vietthu.vn',
            ],
        ];

        foreach ($data as $item) {
            Supplier::create($item);
        }
    }
}
