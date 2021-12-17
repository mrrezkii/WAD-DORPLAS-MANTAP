<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_institutions'=>$this-> faker->name(),
            'email_institutions' =>$this-> faker->unique() ->safeEmail(),
            'contact_institutions'=>$this-> faker->phoneNumber(),
            'address_institutions'=>$this-> faker->address(),
            'latitude_institutions'=>$this-> faker->name(),
            'longitude_institutions'=>$this-> faker->name(),
        ];
    }
}
