<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonorSubmissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    private $bloodtype = ['O', 'A', 'B', 'AB'];
    private $rhesus = ['positive', 'negative'];

    public function definition()
    {
        return [
            'id_donators' => mt_rand(1, 100),
            'id_institutions' => mt_rand(1, 5),
            'recipient_donor_submissions' => $this->faker->name(),
            'applicant_donor_submissions' => $this->faker->name(),
            'blood_type_donor_submissions' => $this->faker->randomElement($this->bloodtype),
            'rhesus_type_donor_submissions' => $this->faker->randomElement($this->rhesus),
            'quantity_donor_submissions' => mt_rand(1, 5),
            'time_used_donor_submissions' => $this->faker->dateTimeBetween('now', '+1 years'),
            'ktp_donor_submissions' => 'https://source.unsplash.com/350x200?card',
            'letter_donor_submissions' => 'https://source.unsplash.com/350x200?letter',
            'status_donor_submissions' => mt_rand(1, 4)
        ];
    }
}
