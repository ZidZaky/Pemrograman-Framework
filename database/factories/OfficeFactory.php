<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nick' => fake()->userName(),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'rank' => fake()->sentence(mt_rand(5, 10)),
            'about' => fake()->paragraph(mt_rand(5, 10))
        ];
    }
}
