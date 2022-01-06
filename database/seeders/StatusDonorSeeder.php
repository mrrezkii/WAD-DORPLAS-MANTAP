<?php

namespace Database\Seeders;

use App\Models\StatusDonor;
use Illuminate\Database\Seeder;

class StatusDonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusDonor::create([
            'id_status_donor' => '1',
            'name_status_donor' => 'Menunggu Persetujuan'
        ]);

        StatusDonor::create([
            'id_status_donor' => '2',
            'name_status_donor' => 'Dijadwalkan'
        ]);

        StatusDonor::create([
            'id_status_donor' => '3',
            'name_status_donor' => 'Diterima'
        ]);

        StatusDonor::create([
            'id_status_donor' => '4',
            'name_status_donor' => 'Ditolak'
        ]);
    }
}
