<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employees::factory(25)->create();
    }
}
