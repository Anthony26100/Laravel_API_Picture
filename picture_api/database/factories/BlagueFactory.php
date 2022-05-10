<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blague>
 */
class BlagueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(640,480, $this->faker->word(2,true),true),
            'title' => $this->faker->sentence(3),
            'text' => $this->faker->text(),
            'user' => $this->faker->name()
        ];
    }
}
