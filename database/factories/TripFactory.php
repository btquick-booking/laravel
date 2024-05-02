<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Starting_place' => fake()->city(),
            'Destination_place' => fake()->city(),
            'date' => fake()->date(),
            'starting_time' => fake()->time(),
            'Access_time' => fake()->time(),
            'Driver_name' => fake()->name(),
            'Number_of_seat' => fake()->numberBetween(1, 40),
            'Details' => fake()->text(),
            'Trip_price' => fake()->numberBetween(10000, 25000),
        ];
    }
}
