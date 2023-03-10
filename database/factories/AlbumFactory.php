<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'user_id' => 1,
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
            'image' => 'https://i.pravatar.cc/300',
        ];
    }
}
