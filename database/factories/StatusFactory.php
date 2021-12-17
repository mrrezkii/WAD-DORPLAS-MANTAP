<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    status = [''];
     public function definition()
    {
        return [
            'id' => mt_rand(1, 9),
            'name_status'=>$this->faker->unique->randomElement($this->),
        ];
    }
}
