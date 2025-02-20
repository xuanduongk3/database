<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'score' => 1,
                'label' => 'rất tệ'
            ],
            [
                'score' => 2,
                'label' => 'tệ'
            ],
            [
                'score' => 3,
                'label' => 'bình thường'
            ],
            [
                'score' => 4,
                'label' => 'tốt'
            ],
            [
                'score' => 5,
                'label' => 'rất tốt'
            ],

        ];

        foreach($data as $data){
            Rating::create($data);
        }
    }
}
