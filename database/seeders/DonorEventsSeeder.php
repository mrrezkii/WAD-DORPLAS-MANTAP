<?php

namespace Database\Seeders;

use App\Models\DonorEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DonorEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '04c10453-6762-3a69-9cd4-fdfc043164bd',
            'name_donor_events' => 'Setitik Darah Sejuta Rasa',
            'start_date_donor_events' => '2022-03-01',
            'end_date_donor_events' => '2022-06-01',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => '',
            'point_donor_events' => '23'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '05fae751-7d73-3b41-a567-44843869588f',
            'name_donor_events' => 'PMI day, the day for giving a life with blood donation',
            'start_date_donor_events' => '2022-02-03',
            'end_date_donor_events' => '2022-06-05',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Donor darah oleh pelajar provinsi jawa timur',
            'point_donor_events' => '54'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
            'name_donor_events' => 'Donor darah satu tetes darah yang berarti bagi mereka',
            'start_date_donor_events' => '2022-01-01',
            'end_date_donor_events' => '2022-12-12',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Donor darah sebagai penggalangan darah untuk membatu pasien covid',
            'point_donor_events' => '86'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '04c10453-6762-3a69-9cd4-fdfc043164bd',
            'name_donor_events' => 'Donor massal menyambut HUT Kota Bandung',
            'start_date_donor_events' => '2022-03-29',
            'end_date_donor_events' => '2022-06-01',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Acara donor darah yang diadakan untuk memperingati hari jadi kota bandung',
            'point_donor_events' => '10'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '05fae751-7d73-3b41-a567-44843869588f',
            'name_donor_events' => 'Donor darah, share your blood save their life',
            'start_date_donor_events' => '2022-03-03',
            'end_date_donor_events' => '2022-07-25',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'PMI seluruh sekolah di kota Surabaya bekerja sama mengadakan donor darah sebanding dengan kebutuhan darah yang meningkat',
            'point_donor_events' => '43'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '05993934-409e-3c74-9559-150c4cee359b',
            'name_donor_events' => 'We Share We Can',
            'start_date_donor_events' => '2022-02-03',
            'end_date_donor_events' => '2022-12-11',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Acara donor darah di awal tahun dengan harapan agar keadaan segera membaik',
            'point_donor_events' => '65'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
            'name_donor_events' => 'Give Blood and Keep The World Beating',
            'start_date_donor_events' => '2022-04-24',
            'end_date_donor_events' => '2022-05-01',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Universitas telkom dan PMI Kota bandung bekerjasama mengadakan acara donor darah',
            'point_donor_events' => '76'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0264db2d-0f84-32ef-b732-d56d7b3d0493',
            'name_donor_events' => 'Setetes darah anda sangat berharga',
            'start_date_donor_events' => '2022-03-03',
            'end_date_donor_events' => '2022-06-05',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Donor darah yang meriah terdapat beberapa tamu undangan top level kota bandung',
            'point_donor_events' => '64'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0264db2d-0f84-32ef-b732-d56d7b3d0493',
            'name_donor_events' => '#darurat donor darah 2.0',
            'start_date_donor_events' => '2022-02-03',
            'end_date_donor_events' => '2022-10-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Penyuluhan tentang pentingnya manusia sehat untuk mendonorkan darahnya',
            'point_donor_events' => '98'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '05993934-409e-3c74-9559-150c4cee359b',
            'name_donor_events' => 'Baksos Donor Darah',
            'start_date_donor_events' => '2022-06-03',
            'end_date_donor_events' => '2022-06-05',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Diadakanya bakti sosial serta donor darah secara sukarela oleh masyarakat',
            'point_donor_events' => '35'
        ]);
    }
}
