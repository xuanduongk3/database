<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Catalog;

class CatalogSeeder extends Seeder
{
    public function run()
    {
        // Đọc file JSON
        $json = File::get(database_path('data/catalogs.json'));
        $data = json_decode($json, true);

        // Nhập dữ liệu vào bảng loai_an_pham
        foreach ($data as $item) {
            Catalog::create($item);
        }
    }
}
