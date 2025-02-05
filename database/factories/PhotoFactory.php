<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "url" => $this->faker->url,
            "type" => $this->faker->randomElement(["image/jpeg", "image/png", "image/gif", "image/webp"]),
            "post_id" => $this->faker->numberBetween(1, 10),
            "is_main" => $this->faker->boolean
        ];
    }
}
