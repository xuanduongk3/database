<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'color_name' => 'Đen'
            ],
            [
                'color_name' => 'Xanh'
            ],
            [
                'color_name' => 'Tím'
            ],
            [
                'color_name' => 'Đỏ'
            ],
            [
                'color_name' => 'Cam'
            ],
            [
                'color_name' => 'Hồng'
            ],
            [
                'color_name' => 'Vàng'
            ],
            [
                'color_name' => 'Nhiều Màu'
            ],
            [
                'color_name' => 'Trắng'
            ],
            [
                'color_name' => 'Xám'
            ],
            [
                'color_name' => 'Kem'
            ]
        ];

        foreach($data as $data){
            Color::create($data);
        }
    }
}
