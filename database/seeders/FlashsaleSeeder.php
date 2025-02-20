<?php

namespace Database\Seeders;

use App\Models\Flashsale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlashsaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Flashsale::factory()->count(20)->create();
    }
}
