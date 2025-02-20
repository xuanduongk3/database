<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'brand_name' => 'Thiên Long'
            ],
            [
                'brand_name' => 'Hồng Hà'
            ],
            [
                'brand_name' => 'Elephant'
            ],
            [
                'brand_name' => 'Pilot'
            ],
            [
                'brand_name' => 'Deli'
            ],
            [
                'brand_name' => 'Pentel'
            ],
            [
                'brand_name' => 'Campus'
            ],
            [
                'brand_name' => 'Zebra'
            ],
            [
                'brand_name' => 'Plus'
            ],
            [
                'brand_name' => 'Milan'
            ],
            [
                'brand_name' => 'Crown'
            ]
        ];
        foreach ($data as $data) {
            Brand::create($data);
        }
    }
}
