<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->company,
            "slug" => $this->faker->slug,
            "address" => $this->faker->address(),
            "city" => $this->faker->city,
            "distance" => $this->faker->randomFloat(0, 0, 1000)
        ];
    }
}
