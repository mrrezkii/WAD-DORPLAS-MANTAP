<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonatorsFactory extends Factory
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
            'id_donators' => $this->faker->unique->uuid(),
            'name_donators' => $this->faker->name(),
            'email_donators' => $this->faker->unique()->safeEmail(),
            'password_donators' => bcrypt('12345'),
            'blood_type_donators' => $this->faker->randomElement($this->bloodtype),
            'rhesus_type_donators' => $this->faker->randomElement($this->rhesus),
            'contact_donators' => $this->faker->phoneNumber(),
            'address_donators' => $this->faker->address(),
            'point_donators' => mt_rand(0, 100)
        ];
    }
}
