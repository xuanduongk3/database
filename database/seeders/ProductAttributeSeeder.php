<?php

namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 350
            ],
            [
                'product_id' => 1,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14 x 1.6 cm'
            ],
            [
                'product_id' => 1,
                'attr_name' => 'Số trang',
                'attr_value' => 332
            ],
            [
                'product_id' => 1,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 2,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 280
            ],
            [
                'product_id' => 2,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 13 x 1.3 cm'
            ],
            [
                'product_id' => 2,
                'attr_name' => 'Số trang',
                'attr_value' => 264
            ],
            [
                'product_id' => 2,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 3,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 520
            ],
            [
                'product_id' => 3,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '15.5 x 23.5 x 2.5'
            ],
            [
                'product_id' => 3,
                'attr_name' => 'Số trang',
                'attr_value' => 516
            ],
            [
                'product_id' => 3,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 5,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 430
            ],
            [
                'product_id' => 5,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 16 x 2 cm'
            ],
            [
                'product_id' => 5,
                'attr_name' => 'Số trang',
                'attr_value' => 412
            ],
            [
                'product_id' => 5,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 6,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 450
            ],
            [
                'product_id' => 6,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '26 x 19 x 1.2 cm'
            ],
            [
                'product_id' => 6,
                'attr_name' => 'Số trang',
                'attr_value' => 207
            ],
            [
                'product_id' => 6,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 7,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Phương Huyền'
            ],
            [
                'product_id' => 7,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 300
            ],
            [
                'product_id' => 7,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14 x 0.7 cm'
            ],
            [
                'product_id' => 7,
                'attr_name' => 'Số trang',
                'attr_value' => 142
            ],
            [
                'product_id' => 7,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 8,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Nguyễn Kim Dung'
            ],
            [
                'product_id' => 8,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 200
            ],
            [
                'product_id' => 8,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14.5 x 0.8 cm'
            ],
            [
                'product_id' => 8,
                'attr_name' => 'Số trang',
                'attr_value' => 159
            ],
            [
                'product_id' => 8,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 9,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Nguyễn Thành Long'
            ],
            [
                'product_id' => 9,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 120
            ],
            [
                'product_id' => 9,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '19 x 13 x 0.7 cm'
            ],
            [
                'product_id' => 9,
                'attr_name' => 'Số trang',
                'attr_value' => 112
            ],
            [
                'product_id' => 9,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 10,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Thùy An'
            ],
            [
                'product_id' => 10,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 220
            ],
            [
                'product_id' => 10,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14.5 x 20.5'
            ],
            [
                'product_id' => 10,
                'attr_name' => 'Số trang',
                'attr_value' => 208
            ],
            [
                'product_id' => 10,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 11,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Mai Loan'
            ],
            [
                'product_id' => 11,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 300
            ],
            [
                'product_id' => 11,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 16 x 0.5 cm'
            ],
            [
                'product_id' => 11,
                'attr_name' => 'Số trang',
                'attr_value' => 272
            ],
            [
                'product_id' => 11,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 12,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 220
            ],
            [
                'product_id' => 12,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20 x 12 x 1 cm'
            ],
            [
                'product_id' => 12,
                'attr_name' => 'Số trang',
                'attr_value' => 208
            ],
            [
                'product_id' => 12,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 13,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Lexi_mineme'
            ],
            [
                'product_id' => 13,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 190
            ],
            [
                'product_id' => 13,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '19.5 x 13.5 x 0.8 cm'
            ],
            [
                'product_id' => 13,
                'attr_name' => 'Số trang',
                'attr_value' => 176
            ],
            [
                'product_id' => 13,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 14,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Thùy Vân'
            ],
            [
                'product_id' => 14,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 250
            ],
            [
                'product_id' => 14,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '19 x 13 x 1 cm'
            ],
            [
                'product_id' => 14,
                'attr_name' => 'Số trang',
                'attr_value' => 216
            ],
            [
                'product_id' => 14,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 15,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 220
            ],
            [
                'product_id' => 15,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 13 x 1 cm'
            ],
            [
                'product_id' => 15,
                'attr_name' => 'Số trang',
                'attr_value' => 208
            ],
            [
                'product_id' => 15,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 16,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 230
            ],
            [
                'product_id' => 16,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 13 x 1 cm'
            ],
            [
                'product_id' => 16,
                'attr_name' => 'Số trang',
                'attr_value' => 212
            ],
            [
                'product_id' => 16,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 17,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 250
            ],
            [
                'product_id' => 17,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 13 x 1 cm'
            ],
            [
                'product_id' => 17,
                'attr_name' => 'Số trang',
                'attr_value' => 200
            ],
            [
                'product_id' => 17,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 18,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 190
            ],
            [
                'product_id' => 18,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 13 cm x 1.5'
            ],
            [
                'product_id' => 18,
                'attr_name' => 'Số trang',
                'attr_value' => 208
            ],
            [
                'product_id' => 18,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 19,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Phạm Hồng Anh'
            ],
            [
                'product_id' => 19,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 360
            ],
            [
                'product_id' => 19,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '15 x 24'
            ],
            [
                'product_id' => 19,
                'attr_name' => 'Số trang',
                'attr_value' => 359
            ],
            [
                'product_id' => 19,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 20,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Trân'
            ],
            [
                'product_id' => 20,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 240
            ],
            [
                'product_id' => 20,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14.5 x 1.1 cm'
            ],
            [
                'product_id' => 20,
                'attr_name' => 'Số trang',
                'attr_value' => 224
            ],
            [
                'product_id' => 20,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 21,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Bùi Thanh Thúy'
            ],
            [
                'product_id' => 21,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 350
            ],
            [
                'product_id' => 21,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 15.7 cm'
            ],
            [
                'product_id' => 21,
                'attr_name' => 'Số trang',
                'attr_value' => 344
            ],
            [
                'product_id' => 21,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 22,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Linh Tử'
            ],
            [
                'product_id' => 22,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 250
            ],
            [
                'product_id' => 22,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 15.7 x 1.1 cm'
            ],
            [
                'product_id' => 22,
                'attr_name' => 'Số trang',
                'attr_value' => 232
            ],
            [
                'product_id' => 22,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 23,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Thảo Nguyên'
            ],
            [
                'product_id' => 23,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 480
            ],
            [
                'product_id' => 23,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 16 x 2.3 cm'
            ],
            [
                'product_id' => 23,
                'attr_name' => 'Số trang',
                'attr_value' => 464
            ],
            [
                'product_id' => 23,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 24,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 325
            ],
            [
                'product_id' => 24,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14.5 x 1.5 cm'
            ],
            [
                'product_id' => 24,
                'attr_name' => 'Số trang',
                'attr_value' => 376
            ],
            [
                'product_id' => 24,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 25,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Nguyễn Bích Lan, Tô Yến Ly'
            ],
            [
                'product_id' => 25,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 280
            ],
            [
                'product_id' => 25,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20 x 14.5 cm'
            ],
            [
                'product_id' => 25,
                'attr_name' => 'Số trang',
                'attr_value' => 244
            ],
            [
                'product_id' => 25,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 26,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 200
            ],
            [
                'product_id' => 26,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14.5 x 10 x 1.4 cm'
            ],
            [
                'product_id' => 26,
                'attr_name' => 'Số trang',
                'attr_value' => 296
            ],
            [
                'product_id' => 26,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 27,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 230
            ],
            [
                'product_id' => 27,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14.5 x 10 x 0.5 cm'
            ],
            [
                'product_id' => 27,
                'attr_name' => 'Số trang',
                'attr_value' => 244
            ],
            [
                'product_id' => 27,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 28,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 343
            ],
            [
                'product_id' => 28,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 13 x 1.5 cm'
            ],
            [
                'product_id' => 28,
                'attr_name' => 'Số trang',
                'attr_value' => 351
            ],
            [
                'product_id' => 28,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 29,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 132
            ],
            [
                'product_id' => 29,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14.5 x 0.5 cm'
            ],
            [
                'product_id' => 29,
                'attr_name' => 'Số trang',
                'attr_value' => 102
            ],
            [
                'product_id' => 29,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 30,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 550
            ],
            [
                'product_id' => 30,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 16 x 1.9 cm'
            ],
            [
                'product_id' => 30,
                'attr_name' => 'Số trang',
                'attr_value' => 384
            ],
            [
                'product_id' => 30,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 31,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Việt Khương'
            ],
            [
                'product_id' => 31,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 443
            ],
            [
                'product_id' => 31,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '20.5 x 14.5 cm'
            ],
            [
                'product_id' => 31,
                'attr_name' => 'Số trang',
                'attr_value' => 400
            ],
            [
                'product_id' => 31,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 32,
                'attr_name' => 'Người Dịch',
                'attr_value' => 'Thúy Hằng, Anh Thư'
            ],
            [
                'product_id' => 32,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 500
            ],
            [
                'product_id' => 32,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '24 x 16 cm'
            ],
            [
                'product_id' => 32,
                'attr_name' => 'Số trang',
                'attr_value' => 480
            ],
            [
                'product_id' => 32,
                'attr_name' => 'Hình thức',
                'attr_value' => 'Bìa Mềm'
            ],
            [
                'product_id' => 33,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Trung Quốc'
            ],
            [
                'product_id' => 33,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Xanh'
            ],
            [
                'product_id' => 33,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 33,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 20
            ],
            [
                'product_id' => 33,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14 x 1 x 1 cm'
            ],
            [
                'product_id' => 34,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Thương Hiệu Đức'
            ],
            [
                'product_id' => 34,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Xanh'
            ],
            [
                'product_id' => 34,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 34,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 20
            ],
            [
                'product_id' => 34,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14 x 1 x 1 cm'
            ],
            [
                'product_id' => 35,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Thương Hiệu Nhật'
            ],
            [
                'product_id' => 35,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Đỏ'
            ],
            [
                'product_id' => 35,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 35,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 20
            ],
            [
                'product_id' => 35,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14 x 1 x 1 cm'
            ],
            [
                'product_id' => 36,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Việt Nam'
            ],
            [
                'product_id' => 36,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Gỗ'
            ],
            [
                'product_id' => 36,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 10
            ],
            [
                'product_id' => 36,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14 x 1 x 1 cm'
            ],
            [
                'product_id' => 37,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Thương Hiệu Nhật'
            ],
            [
                'product_id' => 37,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Đen'
            ],
            [
                'product_id' => 37,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 37,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 20
            ],
            [
                'product_id' => 37,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '12.7 x 2 x 2 cm'
            ],
            [
                'product_id' => 38,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Thương Hiệu Nhật'
            ],
            [
                'product_id' => 38,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Đen'
            ],
            [
                'product_id' => 38,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 38,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 20
            ],
            [
                'product_id' => 38,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14 x 1 x 1 cm'
            ],
            [
                'product_id' => 39,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Việt Nam'
            ],
            [
                'product_id' => 39,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Đen'
            ],
            [
                'product_id' => 39,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 39,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 11
            ],
            [
                'product_id' => 39,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14.5 x 1 x 1 cm'
            ],            
            [
                'product_id' => 40,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Thương Hiệu Đức'
            ],
            [
                'product_id' => 40,
                'attr_name' => 'Màu Mực',
                'attr_value' => 'Vàng'
            ],
            [
                'product_id' => 40,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 40,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 20
            ],
            [
                'product_id' => 40,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '6.5 x 2.5 x 1 cm'
            ],
            [
                'product_id' => 41,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Trung Quốc'
            ],
            [
                'product_id' => 41,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa, Kim Loại'
            ],
            [
                'product_id' => 41,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 55
            ],
            [
                'product_id' => 41,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '14.5 x 9.5 x 3 cm'
            ],
            [
                'product_id' => 42,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Thương Hiệu Tây Ban Nha'
            ],
            [
                'product_id' => 42,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Giấy'
            ],
            [
                'product_id' => 42,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 17
            ],
            [
                'product_id' => 42,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '15.8 x 10 x 0.3 cm'
            ],
            [
                'product_id' => 43,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Trung Quốc'
            ],
            [
                'product_id' => 43,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 43,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 36
            ],
            [
                'product_id' => 43,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '33.5 x 24 x 1 cm'
            ],
            [
                'product_id' => 44,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Việt Nam'
            ],
            [
                'product_id' => 44,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Nhựa'
            ],
            [
                'product_id' => 44,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 108
            ],
            [
                'product_id' => 44,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '22.5 x 8.5 x 3 cm'
            ],
            [
                'product_id' => 45,
                'attr_name' => 'Xuất Xứ Thương Hiệu',
                'attr_value' => 'Việt Nam'
            ],
            [
                'product_id' => 45,
                'attr_name' => 'Chất liệu',
                'attr_value' => 'Giấy'
            ],
            [
                'product_id' => 45,
                'attr_name' => 'Trọng lượng (gr)',
                'attr_value' => 52
            ],
            [
                'product_id' => 45,
                'attr_name' => 'Kích Thước Bao Bì',
                'attr_value' => '9.5 x 9.5 x 2 cm'
            ]            
        ];
        foreach($data as $value){
            ProductAttribute::create($value);
        } 
    }
}
