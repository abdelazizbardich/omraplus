<?php

namespace Database\Factories;

use App\Models\FlightLine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\flight>
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
            "title" => $this->faker->sentence(3),
            "going_date" => $this->faker->date(),
            "return_date" => $this->faker->date(),
            "flight_going" => FlightLine::get()->random()->id,
            "flight_return" => FlightLine::get()->random()->id,
            "description" => $this->faker->paragraph(3),
            "is_umrah" => $this->faker->boolean(),
            "is_hadj" => $this->faker->boolean()
        ];
    }
}
