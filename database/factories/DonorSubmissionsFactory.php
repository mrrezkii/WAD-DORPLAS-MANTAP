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
    private $institutions = ['0264db2d-0f84-32ef-b732-d56d7b3d0493', '04c10453-6762-3a69-9cd4-fdfc043164bd', '05993934-409e-3c74-9559-150c4cee359b', '05fae751-7d73-3b41-a567-44843869588f', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5'];

    public function definition()
    {
        return [
            'id_donor_submissions' => $this->faker->unique->uuid(),
            'id_donators' => mt_rand(1, 100),
            'id_institutions' => $this->faker->unique->randomElement($this->institutions),
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
