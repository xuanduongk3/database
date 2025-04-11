<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'brand_name' => 'Thiên Long',
                'description' => 'Thương hiệu văn phòng phẩm hàng đầu Việt Nam, chuyên sản xuất bút viết, dụng cụ học tập và văn phòng.'
            ],
            [
                'brand_name' => 'Hồng Hà',
                'description' => 'Thương hiệu nổi tiếng với các sản phẩm tập vở, giấy và dụng cụ học sinh chất lượng cao.'
            ],
            [
                'brand_name' => 'Elephant',
                'description' => 'Thương hiệu văn phòng phẩm nổi tiếng từ Thái Lan, chuyên về dụng cụ bấm kim, kéo, dao rọc giấy.'
            ],
            [
                'brand_name' => 'Pilot',
                'description' => 'Thương hiệu Nhật Bản chuyên về bút cao cấp như bút gel, bút máy, bút bi và bút lông dầu.'
            ],
            [
                'brand_name' => 'Deli',
                'description' => 'Hãng văn phòng phẩm đến từ Trung Quốc, cung cấp đa dạng sản phẩm từ bút viết, dụng cụ văn phòng đến balo và túi xách.'
            ],
            [
                'brand_name' => 'Pentel',
                'description' => 'Thương hiệu Nhật Bản chuyên về bút lông, bút chì kim, màu vẽ và các sản phẩm sáng tạo.'
            ],
            [
                'brand_name' => 'Campus',
                'description' => 'Thương hiệu vở viết và sổ ghi chép cao cấp từ Nhật Bản, nổi tiếng với chất lượng giấy tốt.'
            ],
            [
                'brand_name' => 'Zebra',
                'description' => 'Hãng bút Nhật Bản nổi tiếng với các dòng bút bi, bút lông kim và bút highlight chất lượng cao.'
            ],
            [
                'brand_name' => 'Plus',
                'description' => 'Thương hiệu văn phòng phẩm Nhật Bản chuyên về kéo, dao rọc giấy, bấm kim và các sản phẩm hỗ trợ văn phòng.'
            ],
            [
                'brand_name' => 'Milan',
                'description' => 'Thương hiệu Tây Ban Nha chuyên về tẩy, bút chì, dụng cụ vẽ và sáng tạo cho học sinh và nghệ sĩ.'
            ],
            [
                'brand_name' => 'Crown',
                'description' => 'Thương hiệu văn phòng phẩm từ Hàn Quốc, chuyên về bút bi, bút gel và các dụng cụ học tập khác.'
            ]
        ];

        foreach ($data as $item) {
            Brand::create($item);
        }
    }
}
