<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->realText($maxNbChars = 70, $indexSize = 2),
            "slug" => $this->faker->slug,
            "going_date" => "2025-02-01",
            "return_date" => "2025-03-01",
            "description" => $this->faker->realText($maxNbChars = 600, $indexSize = 2),
            "is_recommended" => $this->faker->boolean,
            "type" => $this->faker->randomElement(["hajj", "umrah"]),
            "category_id" => $this->faker->numberBetween(1, 10),
            "airline_id" => $this->faker->numberBetween(1, 10),
        ];
    }
}
