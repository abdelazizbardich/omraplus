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
            "title" => $this->faker->name,
            "slug" => $this->faker->slug,
            "going_date" => $this->faker->date(),
            "return_date" => $this->faker->date(),
            "description" => $this->faker->sentence(10),
            "is_recommended" => $this->faker->boolean,
            "is_economic" => $this->faker->boolean,
            "category_id" => $this->faker->numberBetween(1, 10),
        ];
    }
}
