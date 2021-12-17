<?php

namespace Database\Seeders;

use App\Models\DonorNote;
use Illuminate\Database\Seeder;

class DonorNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonorNote::factory(100)->create();
    }
}
