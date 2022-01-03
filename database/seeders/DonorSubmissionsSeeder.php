<?php

namespace Database\Seeders;

use App\Models\DonorSubmissions;
use Illuminate\Database\Seeder;

class DonorSubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonorSubmissions::factory(10)->create();
    }
}
