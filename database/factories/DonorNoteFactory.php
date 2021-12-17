<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonorNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    private $bloodtype= ['O','A','B','AB'];
    private $rhesus=['+','-'];

    public function definition()
    {
        return [
            'id_donators' => $this->faker->unique->numberBetween(1, 100),
            'id_institutions' => $this->faker->numberBetween(1, 25),
            'blood_type_donor_notes' =>  $this->faker->randomElement($this->bloodtype),
            'blood_rhesus_donor_notes' => $this->faker->randomElement($this->rhesus),
            'schedule_donor_notes' => $this->faker->dateTimeBetween('now', '+1 years'),
            'certificate_donor_notes' => $this->faker->filePath(),
            'id_status' => mt_rand(1, 6)
        ];
    }
}
