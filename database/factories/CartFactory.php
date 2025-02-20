<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id'    => $this->faker->randomElement(User::pluck('id')->toArray()),
            'product_id' => $this->faker->randomElement(Product::pluck('id')->toArray()),
            'quantity'   => $this->faker->randomElement(range(1, 3)),
        ];
    }
}
