<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $slug = Str::slug($title . fake()->numerify());

        $body = fake()->paragraphs(23);

        $excerpt = Str::words(implode('', $body), fake()->numberBetween(45, 50));

        $body = array_map(fn ($value) => "<p>$value</p>", $body);
        $body = implode('', $body);

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $excerpt,
            'body' => $body,
        ];
    }
}
