<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titre"=>fake()->title(),
            "date_publication"=>fake()->date(),
            "prix"=>fake()->numberBetween(20, 30),
            "auteur_id"=>fake()->numberBetween(1,10)
        ];
    }
}
