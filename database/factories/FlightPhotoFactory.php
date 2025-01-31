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
            "url" => "https://omraprivee.com/wp-content/uploads/2023/09/kaaba-a2wif1x8on9qihxv-1.jpg",
            "features" => $this->faker->sentence(3),
            "flight_id" => Flight::get()->random()->id,
        ];
    }
}
