<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flashsale>
 */
class FlashsaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productIds = range(1, 45);

        shuffle($productIds); // Đảo trộn danh sách để ngẫu nhiên

        foreach ($productIds as $id) {
            // Đảm bảo start_date và end_date hợp lý: end_date luôn sau start_date
            $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');

            $endDate = $this->faker->dateTimeBetween($startDate, '+1 month');

            return [
                //
                'product_id' => $id,
                'discount_price' => $this->faker->numberBetween(2,30), // giá giảm ngẫu nhiên từ 10 đến 100
                'quantity'       => $this->faker->numberBetween(5, 50),
                'start_date'     => $startDate->format('Y-m-d'),
                'end_date'       => $endDate->format('Y-m-d'),
            ];
        }
    }
}
