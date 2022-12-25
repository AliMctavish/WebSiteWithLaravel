<?php

namespace Database\Factories;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,40),
            'title' => $this->faker->sentence(1),
            'subject' => $this->faker->sentence(20),
            'likes' => $this->faker->numberBetween(0,100),
            'views' => $this->faker->numberBetween(0,100),
      
        ];
    }
}
