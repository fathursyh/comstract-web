<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisSertifikat>
 */
class JenisSertifikatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->sentence(),
            'batch' => fake()->numberBetween(1, 3),
            'mitra' => fake()->sentence(5),
            'pelaksanaan' => fake()->dateTimeBetween('-5 years', '+7 months'),
            'flyer' => fake()->unique()->uuid() . '.png',
            'open' => fake()->boolean(),
        ];
    }
}
