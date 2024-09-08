<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sertifikat>
 */
class SertifikatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode' => fake()->numerify('Comstrac/##/##/###'),
            'filename' => fake()->unique()->uuid() . '.pdf',
            'expired' => fake()->boolean() ? fake()->dateTimeBetween('now', '+7 months') : null,
            'tipe' => fake()->randomElement(['attendance', 'kelulusan']),
        ];
    }
}
