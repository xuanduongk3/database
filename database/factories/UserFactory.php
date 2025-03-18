<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function definition(): array
    {
        return [
            //
            'username' => $this->faker->name(),
            'gender' => $this->faker->randomElement([0, 1]),
            'birthday' => $this->faker->date('y-m-d'),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('123456'),
        ];
    }
}
