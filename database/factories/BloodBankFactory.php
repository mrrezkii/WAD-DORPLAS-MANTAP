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
    private $institutions = [
        '0264db2d-0f84-32ef-b732-d56d7b3d0493',
        '04c10453-6762-3a69-9cd4-fdfc043164bd',
        '05993934-409e-3c74-9559-150c4cee359b',
        '05fae751-7d73-3b41-a567-44843869588f',
        '07f00675-121a-3c22-9f77-97e21324aeeb',
        '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
        '2217c28f-d59c-3ab1-860c-d2cce27b2a9f',
        '272f8cd3-f856-37f0-ac40-94c3b36d52da',
        '537b0937-ddf0-3143-afb9-5511d880d50c',
        '731ef6df-6171-33fd-bd05-93cd76db2cdd',
        '9aa2e5e7-3186-3d65-9b53-75f74c42b1eb',
        '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
        '9e33b53c-d6e2-3b2b-9335-0c6b626981d3',
        '9ed81d0a-e58a-3d0b-9dd3-91eafab5266f',
        'f1b7740b-30c6-38ae-98f6-a994afbf55e6'
    ];

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
