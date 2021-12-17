<?php

namespace Database\Seeders;

use App\Models\DonorNote;
use App\Models\Institution;
use App\Models\Status;
use Illuminate\Database\Seeder;
use App\Models\Donator;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Donator::factory(100)->create();
        Institution::factory(25)->create();
        Status::factory(6)->create();
        DonorNote::factory(100)->create();
    }
}
