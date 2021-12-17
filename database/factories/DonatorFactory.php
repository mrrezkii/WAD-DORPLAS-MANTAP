<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private $bloodtype= ['O','A','B','AB'];
    private $rhesus= ['+','-'];

     public function definition()
    {
        return [
            'name_donators' => $this->faker->name(),
            'email_donators' =>$this->faker->unique()->safeEmail(),
            'password_donators' => $this->faker->password(),
            'blood_type_donators'=> $this->faker->randomElement($this->bloodtype),
            'blood_rhesus_donators'=> $this->faker->randomElement($this->rhesus),
            'contact_donators'=> $this->faker->phoneNumber(),
            'address_donators'=> $this->faker->address(),
            'profile_image_donators'=>'https://source.unsplash.com/350x200?smile',
            'verify_donators' => $this->faker->boolean()
        ];
    }
}
