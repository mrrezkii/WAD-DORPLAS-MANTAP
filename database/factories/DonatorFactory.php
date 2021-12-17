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
    private $rhesus=['+','-'];

     public function definition()
    {
        return [
            'name_donators' =>$this-> faker->name(),
            'email_donator' =>$this-> faker->unique() ->safeEmail(),
            'password_donator' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'blood_type_donators'=>$this-> faker-> randomElements($this->bloodtype),
            'blood_rhesus_donators'=>$this-> faker->randomElements($this->rhesus),
            'contact_donators'=>$this-> faker->phoneNumber(),
            'address_donators'=>$this-> faker->address(),
            'profile_image_donators'=>'https://source.unsplash.com/350x200/?smile',
            

        ];
    }
}
