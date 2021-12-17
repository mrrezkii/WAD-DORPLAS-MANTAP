<?php

namespace Database\Seeders;

use App\Models\Donator;
use Illuminate\Database\Seeder;

class DonatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donator::factory(100)->create();
    }
}
