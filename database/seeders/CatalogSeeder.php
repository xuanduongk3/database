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
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382857/read7wln5tknurwd3gbe.webp'
            ],
            [
                'catalog_name' => 'Truyện thiếu nhi',
                'description' => 'Các loại truyện dành cho thiếu nhi, phù hợp với mọi độ tuổi, giúp phát triển trí tưởng tượng và giáo dục nhân cách.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382856/oelmbfstzjqxtofw258h.webp'
            ],
            [
                'catalog_name' => 'Truyện ngắn',
                'description' => 'Tuyển tập các truyện ngắn và tản văn nhẹ nhàng, sâu sắc về cuộc sống và con người.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382856/ibqr9gzycc4bziprefab.webp'
            ],
            [
                'catalog_name' => 'Trinh thám',
                'description' => 'Các câu chuyện trinh thám ly kỳ, với những màn điều tra và phá án đầy lôi cuốn.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382857/zhhkrx07vx0ot26tu64d.webp'
            ],
            [
                'catalog_name' => 'Truyện cười',
                'description' => 'Truyện cười và truyện hài hước, mang lại tiếng cười và giây phút thư giãn cho người đọc.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382858/c2jzshdpxsplk1uhufag.webp'
            ],
            [
                'catalog_name' => 'Tiểu thuyết',
                'description' => 'Các tiểu thuyết thuộc nhiều thể loại, từ tình cảm, lãng mạn đến phiêu lưu và hành động.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382857/rd9ell3b21ddvzwo5wvy.webp'
            ],
            [
                'catalog_name' => 'Chính trị',
                'description' => 'Các ấn phẩm về chính trị, pháp lý và triết học, cung cấp kiến thức và cái nhìn sâu sắc về xã hội, luật pháp và tư tưởng.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382857/vzbsvzx6zi6aqiumlzrs.jpg'
            ],
            [
                'catalog_name' => 'Văn hóa',
                'description' => 'Các tài liệu về văn hóa, nghệ thuật và du lịch, giúp mở rộng kiến thức và khám phá vẻ đẹp của thế giới.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382858/niogqjqfzi00clqcriux.webp'
            ],
            [
                'catalog_name' => 'Kinh tế',
                'description' => 'Các sách và tài liệu về kinh tế, tài chính và quản lý, cung cấp kiến thức cho người học và các chuyên gia trong lĩnh vực này.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382857/iatnueyzmwcltgl7ycm6.webp'
            ],
            [
                'catalog_name' => 'Bút - Viết',
                'description' => 'Dụng cụ hỗ trợ viết lách, ký kết và vẽ, mang lại sự chính xác và tinh tế trong từng nét chữ.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382856/wust9jchpduntt5djnli.webp'
            ],
            [
                'catalog_name' => 'Dụng cụ văn phòng',
                'description' => 'Các sản phẩm hỗ trợ công việc hàng ngày, đảm bảo hiệu quả và tổ chức trong môi trường làm việc.',
                'catalog_image' => 'https://res.cloudinary.com/whr-clound/image/upload/v1745382856/derzx9nctvewsl3ohl3b.webp'
            ],

        ];

        foreach($data as $data){
            Catalog::create($data);
        }
    }
}
