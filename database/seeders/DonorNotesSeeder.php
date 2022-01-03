<?php

namespace Database\Seeders;

use App\Models\DonorNotes;
use Illuminate\Database\Seeder;

class DonorNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonorNotes::factory(10)->create();
    }
}
