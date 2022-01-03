<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_institutions' => mt_rand(1, 5),
            'name_employees' => $this->faker->name(),
            'email_employees' => $this->faker->unique()->safeEmail(),
            'password_employees' => bcrypt('12345'),
            'contact_employees' => $this->faker->phoneNumber(),
            'address_employees' => $this->faker->address()
        ];
    }
}
