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

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
            'name_donor_events' => 'Donor Darah dan Donor Plasma Konvalesen Pertamina RJBT',
            'start_date_donor_events' => '2022-07-03',
            'end_date_donor_events' => '2022-07-05',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Kegiatan donor darah kerjasama Pertamina dengan PMI',
            'point_donor_events' => '15'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '04c10453-6762-3a69-9cd4-fdfc043164bd',
            'name_donor_events' => 'Donor Darah Serentak Seluruh Indonesia',
            'start_date_donor_events' => '2022-09-23',
            'end_date_donor_events' => '2022-10-03',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Acara Donor darah yang dilaksanakan oleh PMI Indonesia',
            'point_donor_events' => '5'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
            'name_donor_events' => 'Donor Darah bersama PMI Kota Surakarta',
            'start_date_donor_events' => '2022-02-05',
            'end_date_donor_events' => '2022-04-01',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Pemerintah kota Surakarta bekerjasama dengan PMI untuk menggelar donor darah',
            'point_donor_events' => '20'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '07f00675-121a-3c22-9f77-97e21324aeeb',
            'name_donor_events' => 'Donor Darah Peringatan Hari Anti Narkotika Internasional 2022',
            'start_date_donor_events' => '2022-02-15',
            'end_date_donor_events' => '2022-04-29',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Donor darah untuk memperingati hari narkotika nasional 2022',
            'point_donor_events' => '35'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '9aa2e5e7-3186-3d65-9b53-75f74c42b1eb',
            'name_donor_events' => 'Donor Darah Polwan Polres Banyumas',
            'start_date_donor_events' => '2022-03-02',
            'end_date_donor_events' => '2022-03-05',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Polres kota banyumas menggandeng PMI Kota Banyumas menggelar aksi donor darah',
            'point_donor_events' => '22'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '272f8cd3-f856-37f0-ac40-94c3b36d52da',
            'name_donor_events' => 'Kegiatan Donor Darah Pemuda Pasar Jaya bersama PMI',
            'start_date_donor_events' => '2022-06-07',
            'end_date_donor_events' => '2022-06-25',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Donor darah untuk mengingatkan kepada pemuda tentang pentingnya donor darah',
            'point_donor_events' => '54'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0264db2d-0f84-32ef-b732-d56d7b3d0493',
            'name_donor_events' => 'Donor Darah DWP Jawa Barat',
            'start_date_donor_events' => '2022-05-14',
            'end_date_donor_events' => '2022-11-17',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Acara Donor Darah pada DWP Jawa Barat',
            'point_donor_events' => '14'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '272f8cd3-f856-37f0-ac40-94c3b36d52da',
            'name_donor_events' => 'BERDERMA, Pemuda Siaga Pandemi Bersama Donor Plasma',
            'start_date_donor_events' => '2022-07-20',
            'end_date_donor_events' => '2022-08-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Gandeng PMI, Garda Pemuda NasDem Jabar Gelar Donor Darah dan Plasma',
            'point_donor_events' => '21'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '07f00675-121a-3c22-9f77-97e21324aeeb',
            'name_donor_events' => 'DONOR DARAH LPPM KE-35',
            'start_date_donor_events' => '2022-06-20',
            'end_date_donor_events' => '2022-06-25',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Kegiatan Donor Darah dalam Rangka LPPM ke-35',
            'point_donor_events' => '25'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '537b0937-ddf0-3143-afb9-5511d880d50c',
            'name_donor_events' => 'Aksi Donor Darah',
            'start_date_donor_events' => '2022-02-22',
            'end_date_donor_events' => '2022-05-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Aksi donor darah dan seminar nasional tentang pentingnya donor',
            'point_donor_events' => '42'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '04c10453-6762-3a69-9cd4-fdfc043164bd',
            'name_donor_events' => 'Charity Day - Blood Donor',
            'start_date_donor_events' => '2022-01-20',
            'end_date_donor_events' => '2022-02-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Event Donor Darah bersama BluPlaza',
            'point_donor_events' => '21'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '07f00675-121a-3c22-9f77-97e21324aeeb',
            'name_donor_events' => 'MAP Fashion Blood Donation',
            'start_date_donor_events' => '2022-07-20',
            'end_date_donor_events' => '2022-10-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Divisi Fashion MAP bekerja sama dengan PMI Karawang mengadakan kegiatan Donor Darah untuk seluruh karyawan MAP',
            'point_donor_events' => '23'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
            'name_donor_events' => 'A Drop for Hopes',
            'start_date_donor_events' => '2022-07-20',
            'end_date_donor_events' => '2022-08-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Secara keseluruhan Tupperware Indonesia berhasil mengumpulkan ribuan kantong darah dari penyelenggaraan acara Donor Darah nasional ',
            'point_donor_events' => '18'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '272f8cd3-f856-37f0-ac40-94c3b36d52da',
            'name_donor_events' => 'Donor Darah dan Cek Kesehatan',
            'start_date_donor_events' => '2022-08-10',
            'end_date_donor_events' => '2022-08-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'PMI Kota Bekasi mengadakan acara donor darah dan cek kesehatan gratis bagi masyarakat',
            'point_donor_events' => '31'
        ]);

        DonorEvents::create([
            'id_donor_events' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
            'name_donor_events' => 'Yuk... Donor Darah',
            'start_date_donor_events' => '2022-03-20',
            'end_date_donor_events' => '2022-08-15',
            'start_time_donor_events' => '08:00:00',
            'end_time_donor_events' => '17:00:00',
            'desc_donor_events' => 'Diadakan Donor Darah pada setiap sekolah negeri di SMA Se-kota surakarta',
            'point_donor_events' => '22'
        ]);
    }
}