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
        $productIds = range(1, 45); // Giả sử có 45 sản phẩm
        shuffle($productIds);       // Trộn ngẫu nhiên
        $selectedIds = array_slice($productIds, 0, 10);
        foreach ($selectedIds as $id) {
            $startDate = fake()->dateTimeBetween('-1 month', '+1 month');
            $endDate = fake()->dateTimeBetween($startDate, '+1 month');

            Flashsale::create([
                'product_id'     => $id,
                'discount_price' => fake()->numberBetween(2, 30),
                'quantity'       => fake()->numberBetween(5, 50),
                'start_date'     => $startDate->format('Y-m-d'),
                'end_date'       => $endDate->format('Y-m-d'),
            ]);
        }
    }
}
