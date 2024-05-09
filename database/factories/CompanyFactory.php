<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'Company_Name' => Fake()->name(),
            // 'Company_Director' => fake()->name(),
            // 'phone_number' => fake()->phoneNumber(),
            'Company_Name'=>'Trwada',
            'Company_Director'=>'Ahmad',
            'phone_number' => '0988564',
            'user_id'=> 2,
        ];
    }
}
