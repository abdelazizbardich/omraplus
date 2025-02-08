<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "flight_id" => $this->faker->numberBetween(1, 10),
            "hotel_id_mecca" => $this->faker->numberBetween(1, 10),
            "hotel_id_medina" => $this->faker->numberBetween(1, 10),
            "is_economic" => $this->faker->boolean,
            "is_recommended" => $this->faker->boolean,
            "seat_count" => $this->faker->numberBetween(1, 10),
            "have_meals" => $this->faker->boolean
        ];
    }
}
