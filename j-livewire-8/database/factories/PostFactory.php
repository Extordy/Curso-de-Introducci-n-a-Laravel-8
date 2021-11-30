<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //datos falsos
            'name' => $this->faker->sentence,
            'free' => rand(0,1),

            //relacion
            'course_id' => rand(1,10)
        ];
    }
}
