<?php

namespace Database\Seeders;

use App\Models\Donators;
use Illuminate\Database\Seeder;

class DonatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donators::factory(100)->create();
    }
}
