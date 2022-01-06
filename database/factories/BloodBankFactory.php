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
    private $institutions = ['0264db2d-0f84-32ef-b732-d56d7b3d0493', '04c10453-6762-3a69-9cd4-fdfc043164bd', '05993934-409e-3c74-9559-150c4cee359b', '05fae751-7d73-3b41-a567-44843869588f', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5'];

    public function definition()
    {
        return [
            'id_blood_bank' => $this->faker->unique->uuid(),
            'id_institutions' => $this->faker->unique->randomElement($this->institutions),
            'a_positive_blood_bank' => mt_rand(0, 50),
            'a_negative_blood_bank' => mt_rand(0, 50),
            'b_positive_blood_bank' => mt_rand(0, 50),
            'b_negative_blood_bank' => mt_rand(0, 50),
            'ab_positive_blood_bank' => mt_rand(0, 50),
            'ab_negative_blood_bank' => mt_rand(0, 50),
            'o_positive_blood_bank' => mt_rand(0, 50),
            'o_negative_blood_bank' => mt_rand(0, 50),
        ];
    }
}
