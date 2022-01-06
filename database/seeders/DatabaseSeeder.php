<?php

namespace Database\Seeders;

use App\Models\Donator;
use App\Models\DonorNote;
use App\Models\Institution;
use App\Models\Status;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $donators = new DonatorsSeeder();
        $institutions = new InstitutionsSeeder();
        $status_donor = new StatusDonorSeeder();
        $employees = new EmployeesSeeder();
        $blood_bank = new BloodBankSeeder();
        $donor_events = new DonorEventsSeeder();

        $donators->run();
        $institutions->run();
        $status_donor->run();
        $employees->run();
        $blood_bank->run();
        $donor_events->run();

    }
}
