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
    private $status = ['waiting_confirmation', 'update_schedule', 'schedule_rejected', 'conditions_rejected', 'canceled', 'finished'];
     public function definition()
    {
        return [
            'name_status'=>$this->faker->unique->randomElement($this->status),
        ];
    }
}
