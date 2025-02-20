<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'catalog_name' => 'Kinh dị',
                'description' => 'Các ấn phẩm về thể loại huyền bí, giả tưởng và kinh dị, đem lại cảm giác ly kỳ và bất ngờ cho người đọc.',
                'catalog_image' => 'si-so-lop-vang-0.png'
            ],
            [
                'catalog_name' => 'Truyện thiếu nhi',
                'description' => 'Các loại truyện dành cho thiếu nhi, phù hợp với mọi độ tuổi, giúp phát triển trí tưởng tượng và giáo dục nhân cách.',
                'catalog_image' => '100-truyen-ngu-ngon-anh-viet.png'
            ],
            [
                'catalog_name' => 'Truyện ngắn',
                'description' => 'Tuyển tập các truyện ngắn và tản văn nhẹ nhàng, sâu sắc về cuộc sống và con người.',
                'catalog_image' => 'mat-biec.png'
            ],
            [
                'catalog_name' => 'Trinh thám',
                'description' => 'Các câu chuyện trinh thám ly kỳ, với những màn điều tra và phá án đầy lôi cuốn.',
                'catalog_image' => 'cuoc-vieng-tham-cua-vi-khach-bi-an.png'
            ],
            [
                'catalog_name' => 'Truyện cười',
                'description' => 'Truyện cười và truyện hài hước, mang lại tiếng cười và giây phút thư giãn cho người đọc.',
                'catalog_image' => 'truyen-cuoi-viet-nam-thoi-@.png'
            ],
            [
                'catalog_name' => 'Tiểu thuyết',
                'description' => 'Các tiểu thuyết thuộc nhiều thể loại, từ tình cảm, lãng mạn đến phiêu lưu và hành động.',
                'catalog_image' => 'cay-cam-ngot-cua-toi.png'
            ],
            [
                'catalog_name' => 'Chính trị',
                'description' => 'Các ấn phẩm về chính trị, pháp lý và triết học, cung cấp kiến thức và cái nhìn sâu sắc về xã hội, luật pháp và tư tưởng.',
                'catalog_image' => 'nghe-thuat-lanh-dao.png'
            ],
            [
                'catalog_name' => 'Văn hóa',
                'description' => 'Các tài liệu về văn hóa, nghệ thuật và du lịch, giúp mở rộng kiến thức và khám phá vẻ đẹp của thế giới.',
                'catalog_image' => 'viet-nam-phong-tuc.png'
            ],
            [
                'catalog_name' => 'Kinh tế',
                'description' => 'Các sách và tài liệu về kinh tế, tài chính và quản lý, cung cấp kiến thức cho người học và các chuyên gia trong lĩnh vực này.',
                'catalog_image' => 'nghi-giau-lam-giau.png'
            ],
            [
                'catalog_name' => 'Bút - Viết',
                'description' => 'Dụng cụ hỗ trợ viết lách, ký kết và vẽ, mang lại sự chính xác và tinh tế trong từng nét chữ.',
                'catalog_image' => 'but-gel-softline-0.7mm-artline-den.png'
            ],
            [
                'catalog_name' => 'Dụng cụ văn phòng',
                'description' => 'Các sản phẩm hỗ trợ công việc hàng ngày, đảm bảo hiệu quả và tổ chức trong môi trường làm việc.',
                'catalog_image' => 'bang-keo-giay-2f5-kem.png'
            ],

        ];

        foreach($data as $data){
            Catalog::create($data);
        }
    }
}
