<?php

namespace Database\Seeders;

use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1,
                'supplier_id' => rand(1, 13), // Random từ 1 đến 12
                'publication_year' => 2024,
                'author' => 'Emma Hạ My',
                'publisher' => 'Phụ Nữ Việt Nam',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 2,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Emma Hạ My',
                'publisher' => 'Dân Trí',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 3,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Dolores Redondo',
                'publisher' => 'NXB Phụ Nữ',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 4,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Thảo Trang',
                'publisher' => 'NXB Phụ Nữ',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 5,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2024,
                'author' => 'Diệp Lâm Khánh',
                'publisher' => 'Phụ Nữ Việt Nam',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 6,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Nguyễn Châu Nguyên',
                'publisher' => 'Mỹ Thuật',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 7,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2024,
                'author' => 'Luis Sepúlveda',
                'publisher' => 'Hội Nhà Văn',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 8,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Neung In Publishing Company',
                'publisher' => 'Kim Đồng',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 9,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Antoine De Saint-Exupéry',
                'publisher' => 'Kim Đồng',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 10,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2019,
                'author' => 'Xing Tao',
                'publisher' => 'Kim Đồng',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 11,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2020,
                'author' => 'Clint Emerson',
                'publisher' => 'NXB Thanh Niên',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 12,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Lam',
                'publisher' => 'Dân Trí',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 13,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2024,
                'author' => 'Chaiyapat Tongkambunjong, Phanatchakorn Yoosabai',
                'publisher' => 'Văn Học',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 14,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Daiki Shimizu',
                'publisher' => 'Văn Học',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 15,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2024,
                'author' => 'Doãn Hằng',
                'publisher' => 'Văn Học',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 16,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Minh',
                'publisher' => 'Văn Học',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 17,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Én, Thích A Tèo',
                'publisher' => 'AZ Việt Nam',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 18,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Hạ Mer',
                'publisher' => 'Văn Học',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 19,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2019,
                'author' => 'Thomas Harris',
                'publisher' => 'NXB Hội Nhà Văn',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 20,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'R. Austin Freeman',
                'publisher' => 'Dân Trí',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 21,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Lưu Hiểu Huy',
                'publisher' => 'Thanh Niên',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 22,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Liêu Tiểu Đao',
                'publisher' => 'Thanh Niên',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 23,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2024,
                'author' => 'Steve Cavanagh',
                'publisher' => 'Thanh Niên',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 24,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2021,
                'author' => 'Nguyễn Cừ',
                'publisher' => 'Văn Học',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 25,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2020,
                'author' => 'José Mauro de Vasconcelos',
                'publisher' => 'NXB Hội Nhà Văn',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 26,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2024,
                'author' => 'Nguyễn Nhật Ánh',
                'publisher' => 'Trẻ',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 27,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Nguyễn Nhật Ánh',
                'publisher' => 'Trẻ',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 28,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2021,
                'author' => 'Trần Đức Tuấn',
                'publisher' => 'Trẻ',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 29,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2022,
                'author' => 'Đỗ Ca Sơn, Kiều Mai Sơn',
                'publisher' => 'Kim Đồng',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 30,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2023,
                'author' => 'Phan Kế Bính',
                'publisher' => 'Kim Đồng',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 31,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2020,
                'author' => 'Napoleon Hill',
                'publisher' => 'NXB Tổng Hợp TPHCM',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 32,
                'supplier_id' => rand(1, 13),
                'publication_year' => 2021,
                'author' => 'David M Rubenstein',
                'publisher' => 'Dân Trí',
                'language' => 'Tiếng Việt'
            ],
            [
                'product_id' => 33,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Xanh',
                'origin' => 'Trung Quốc'
            ],
            [
                'product_id' => 34,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Xanh',
                'origin' => 'Indonesia'
            ],
            [
                'product_id' => 35,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Đỏ',
                'origin' => 'Malaysia'
            ],
            [
                'product_id' => 36,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Đỏ',
                'origin' => 'Trung Quốc'
            ],
            [
                'product_id' => 37,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Đen',
                'origin' => 'Malaysia'
            ],
            [
                'product_id' => 38,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Đen',
                'origin' => 'Malaysia'
            ],
            [
                'product_id' => 39,
                'supplier_id' => 12,
                'brand_id' => rand(1, 11),
                'color' => 'Đen',
                'origin' => 'Ấn Độ'
            ],
            [
                'product_id' => 41,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Nhiều màu',
                'origin' => 'Trung Quốc'
            ],
            [
                'product_id' => 42,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Nhiều màu',
                'origin' => 'Trung Quốc'
            ],
            [
                'product_id' => 43,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 8,
                'origin' => 'Trung Quốc'
            ],
            [
                'product_id' => 44,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Trắng',
                'origin' => 'Trung Quốc'
            ],
            [
                'product_id' => 45,
                'supplier_id' => rand(1, 13),
                'brand_id' => rand(1, 11),
                'color' => 'Kem',
                'origin' => 'Việt Nam'
            ]
        ];

        foreach ($data as $value) {
            ProductDetail::create($value);
        }
    }
}
