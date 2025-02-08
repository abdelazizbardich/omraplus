<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->realText($maxNbChars = 25, $indexSize = 2),
            "code" => $this->faker->slug,
            "type" => $this->faker->randomElement(["percentage", "fixed"]),
            "value" => $this->faker->randomFloat(2, 1, 100),
            "program_id" => $this->faker->numberBetween(1, 10)
        ];
    }
}
