<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            ['score' => 1, 'label' => 'Rất tệ'],
            ['score' => 2, 'label' => 'Tệ'],
            ['score' => 3, 'label' => 'Bình thường'],
            ['score' => 4, 'label' => 'Tốt'],
            ['score' => 5, 'label' => 'Xuất sắc'],
        ]);
    }
}
