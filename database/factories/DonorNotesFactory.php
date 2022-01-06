<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonorNotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_donators' => mt_rand(1, 100),
            'id_institutions' => mt_rand(1, 5),
            'id_donor_events' => mt_rand(1, 10),
            'status_donor_notes' => mt_rand(1, 4),
            'schedule_donor_notes' => $this->faker->dateTimeBetween('now', '+1 years')
        ];
    }
}
