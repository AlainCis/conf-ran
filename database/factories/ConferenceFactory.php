<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "thematique"=>fake()->sentences(2,true),
            "dateconf"=>fake()->date(),
            "lieu"=>fake()->address(),
            "orateur"=>fake()->name(),
            "organisateur"=>fake()->name()
        ];
    }
}
