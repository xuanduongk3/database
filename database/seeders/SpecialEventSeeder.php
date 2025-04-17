<?php

namespace Database\Seeders;

use App\Models\SpecialEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Tuần lễ sách thiếu nhi 2025',
                'description' => 'Sự kiện đọc sách dành cho thiếu nhi với nhiều trò chơi, quà tặng và giảm giá sách lên đến 50%.',
                'img_event' => 'tuan-le-sach-thieu-nhi.webp',
                'is_active' => true,
                'start_date' => '2025-06-01 09:00:00',
                'end_date' => '2025-06-07 17:00:00',
                'status' => 'Chưa bắt đầu',
                'slug' => 'tuan-le-sach-thieu-nhi-2025'
            ],
            [
                'name' => 'Hội sách Mùa thu',
                'description' => 'Cơ hội mua sách với mức giá ưu đãi, giao lưu với tác giả nổi tiếng và tham gia tọa đàm văn học.',
                'img_event' => 'hoi-sach-mua-thu.jpg',
                'is_active' => true,
                'start_date' => '2025-09-15 08:00:00',
                'end_date' => '2025-09-20 18:00:00',
                'status' => 'Chưa bắt đầu',
                'slug' => 'hoi-sach-mua-thu'
            ],
            [
                'name' => 'Black Friday - Giảm giá sách',
                'description' => 'Chương trình giảm giá sách cực mạnh chỉ duy nhất ngày Black Friday - giảm đến 70% toàn bộ sách.',
                'img_event' => 'black-firday.webp',
                'is_active' => false,
                'start_date' => '2024-11-29 00:00:00',
                'end_date' => '2024-11-29 23:59:00',
                'status' => 'Chưa bắt đầu',
                'slug' => 'black-friday-giam-gia-sach'
            ],
            [
                'name' => 'Ngày hội đổi sách cũ lấy sách mới',
                'description' => 'Tham gia đổi sách đã qua sử dụng lấy sách mới miễn phí, khuyến khích văn hóa đọc và tái sử dụng sách.',
                'img_event' => 'doi-sach-cu-lay-sach-moi.webp',
                'is_active' => true,
                'start_date' => '2025-04-22 09:00:00',
                'end_date' => '2025-04-24 17:00:00',
                'status' => 'Sắp bắt đầu',
                'slug' => 'ngay-hoi-doi-sach-cu-lay-moi'
            ],
            [
                'name' => 'Sách và Cà phê – Talkshow cùng tác giả',
                'description' => 'Không gian mở giao lưu cùng các tác giả nổi tiếng, thảo luận về sách và cuộc sống.',
                'img_event' => 'talkshow-event.jpg',
                'is_active' => true,
                'start_date' => '2025-04-10 15:00:00',
                'end_date' => '2025-04-12 18:00:00',
                'status' => 'Đã kết thúc',
                'slug' => 'sach-va-ca-phe-talkshow'
            ],
        ];

        foreach ($data as $item) {
            SpecialEvent::create($item);
        }
    }
}
