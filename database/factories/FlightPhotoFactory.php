<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\flightPhoto>
 */
class FlightPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "url" => $this->faker->imageUrl(),
            "features" => $this->faker->sentence(3),
            "flight_id" => Flight::get()->random()->id,
        ];
    }
}
