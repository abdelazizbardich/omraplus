<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgramPrice>
 */
class ProgramPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "room_id" => $this->faker->numberBetween(1, 5),
            "program_id" => $this->faker->numberBetween(1, 10),
            "old_price" => $this->faker->randomFloat(0, 10000, 30000),
            "price" => $this->faker->randomFloat(0, 10000, 30000)
        ];
    }
}
