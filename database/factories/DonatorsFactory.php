<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class DonatorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    private $bloodtype = ['O', 'A', 'B', 'AB'];
    private $rhesus = ['positive', 'negative'];
    private $gender = ['male', 'female'];

    public function definition()
    {
        return [
            'id_donators' => $this->faker->unique->uuid(),
            'name_donators' => $this->faker->name(),
            'email_donators' => $this->faker->unique()->safeEmail(),
            'password_donators' => Hash::make(12345),
            'gender_donators' => $this->faker->randomElement($this->gender),
            'blood_type_donators' => $this->faker->randomElement($this->bloodtype),
            'rhesus_type_donators' => $this->faker->randomElement($this->rhesus),
            'contact_donators' => $this->faker->unique->phoneNumber(),
            'address_donators' => $this->faker->address(),
            'point_donators' => mt_rand(0, 100)
        ];
    }
}
