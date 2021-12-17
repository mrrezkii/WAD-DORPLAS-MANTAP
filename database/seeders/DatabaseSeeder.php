<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donator;
use app\Mosels\DonorNote;
use app\Mosels\Institution;
use app\Mosels\Status;
use app\Mosels\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Donator::factory(9)->create();
        Institution::factor(10)->create();
    }
}
