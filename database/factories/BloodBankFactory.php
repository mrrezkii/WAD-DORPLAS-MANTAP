<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BloodBankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_institutions' => $this->faker->unique->randomElement(range(1, 5)),
            'a_positive_blood_bank' => mt_rand(0, 250),
            'a_negative_blood_bank' => mt_rand(0, 250),
            'b_positive_blood_bank' => mt_rand(0, 250),
            'b_negative_blood_bank' => mt_rand(0, 250),
            'ab_positive_blood_bank' => mt_rand(0, 250),
            'ab_negative_blood_bank' => mt_rand(0, 250),
            'o_positive_blood_bank' => mt_rand(0, 250),
            'o_negative_blood_bank' => mt_rand(0, 250),
        ];
    }
}
