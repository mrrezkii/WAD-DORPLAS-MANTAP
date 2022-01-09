<?php

namespace Database\Seeders;

use App\Models\Institutions;
use Illuminate\Database\Seeder;

class InstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institutions::create([
            'id_institutions' => '0264db2d-0f84-32ef-b732-d56d7b3d0493',
            'name_institutions' => 'PMI Jawa Barat Pusat',
            'contact_institutions' => '(022) 2500095',
            'email_institutions' => 'halo@pmijabar.or.id',
            'address_institutions' => 'Jl. Ir. H. Juanda No.426A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'longitude_institutions' => '-6.86324723578973',
            'latitude_institutions' => '107.62146541259783',
        ]);

        Institutions::create([
            'id_institutions' => '04c10453-6762-3a69-9cd4-fdfc043164bd',
            'name_institutions' => 'PMI Jawa Timur Pusat',
            'contact_institutions' => '(031) 5055173',
            'email_institutions' => ' jawa_timur@pmi.or.id',
            'address_institutions' => 'Jl. Karang Menjangan 22 Surabaya',
            'longitude_institutions' => '-7.263475929872024',
            'latitude_institutions' => '112.76294054132508',
        ]);

        Institutions::create([
            'id_institutions' => '05993934-409e-3c74-9559-150c4cee359b',
            'name_institutions' => 'PMI Surabaya',
            'contact_institutions' => '(031) 99443899',
            'email_institutions' => 'pmisurabaya@pmi.or.id',
            'address_institutions' => 'Jl. Sumatera No.71, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281',
            'longitude_institutions' => '-7.270122660967294',
            'latitude_institutions' => '112.7485233269915',
        ]);

        Institutions::create([
            'id_institutions' => '05fae751-7d73-3b41-a567-44843869588f',
            'name_institutions' => 'Unit Tranfusi Darah Palang Merah Indonesia Kota Surabaya',
            'contact_institutions' => '(031) 531328',
            'email_institutions' => 'contact.pmi@gmail.com',
            'address_institutions' => 'Jl. Embong Ploso No.7-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271',
            'longitude_institutions' => '-7.267914199486669',
            'latitude_institutions' => '112.74577088043364',
        ]);

        Institutions::create([
            'id_institutions' => '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
            'name_institutions' => 'PMI Kota Bandung',
            'contact_institutions' => '(022) 4207052',
            'email_institutions' => 'pmi.bandung@pmijabar.or.id',
            'address_institutions' => 'Jl. Aceh No.79, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114',
            'longitude_institutions' => '-6.90850812347344',
            'latitude_institutions' => '107.61962559763123',
        ]);

        Institutions::create([
            'id_institutions' => '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
            'name_institutions' => 'PMI Kota Surakarta',
            'contact_institutions' => '(0271) 646505',
            'email_institutions' => 'kota_surakarta@pmi.or.id',
            'address_institutions' => 'Jl. Kolonel Sutarto No.58, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126',
            'longitude_institutions' => '-7.559450',
            'latitude_institutions' => '110.842530',
        ]);

        Institutions::create([
            'id_institutions' => '9aa2e5e7-3186-3d65-9b53-75f74c42b1eb',
            'name_institutions' => 'Klinik PMI Sokaraja / UDD PMI Kab Banyumas',
            'contact_institutions' => '(0281) 6441014',
            'email_institutions' => 'pmisokaraja@gmail.com',
            'address_institutions' => 'Jl. Pekaja No.37, Dusun II Sokaraja Tengah, Sokaraja Tengah, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181',
            'longitude_institutions' => '-7.461380',
            'latitude_institutions' => '109.286360',
        ]);

        Institutions::create([
            'id_institutions' => '537b0937-ddf0-3143-afb9-5511d880d50c',
            'name_institutions' => 'Unit Donor Darah PMI Kota Semarang',
            'contact_institutions' => '(024) 3515050',
            'email_institutions' => 'kota_semarang@pmi.or.id',
            'address_institutions' => 'Jl. Mgr Sugiyopranoto No.31, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131',
            'longitude_institutions' => '-6.984000',
            'latitude_institutions' => '110.408450',
        ]);

        Institutions::create([
            'id_institutions' => '272f8cd3-f856-37f0-ac40-94c3b36d52da',
            'name_institutions' => 'PMI (Palang Merah Indonesia) Kota Bekasi',
            'contact_institutions' => '(021) 88960247',
            'email_institutions' => 'markas@pmikotabekasi.or.id',
            'address_institutions' => 'Jl. Pramuka No.1, RT.006/RW.006, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141',
            'longitude_institutions' => '-6.240870',
            'latitude_institutions' => '107.000640',
        ]);

        Institutions::create([
            'id_institutions' => '07f00675-121a-3c22-9f77-97e21324aeeb',
            'name_institutions' => 'Palang Merah Indonesia Kabupaten Karawang',
            'contact_institutions' => '(0267) 405190',
            'email_institutions' => 'karang.pmi@yahoo.com',
            'address_institutions' => 'Jl. Jend.Ahmad Yani No.68, By Pass, Nagasari, Kec. Karawang Bar., Kabupaten Karawang, Jawa Barat 41314',
            'longitude_institutions' => '-6.299290',
            'latitude_institutions' => '107.299850',
        ]);

        Institutions::create([
            'id_institutions' => 'f1b7740b-30c6-38ae-98f6-a994afbf55e6',
            'name_institutions' => 'Palang Merah Indonesia Kabupaten Sukabumi',
            'contact_institutions' => '(0266) 236447',
            'email_institutions' => 'info@pmisukabumikab.org',
            'address_institutions' => 'Jl. Raya Sukabumi, Sukaresmi, Kec. Cisaat, Kabupaten Sukabumi, Jawa Barat 43152',
            'longitude_institutions' => '-6.912208',
            'latitude_institutions' => '106.904933',
        ]);

        Institutions::create([
            'id_institutions' => '2217c28f-d59c-3ab1-860c-d2cce27b2a9f',
            'name_institutions' => 'PMI Bogor',
            'contact_institutions' => '(0251) 832 4080',
            'email_institutions' => 'sekretariat@rspmibogor.or.id',
            'address_institutions' => 'Jl. Rumah Sakit I, RT.01/RW.08, Tegallega, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16129',
            'longitude_institutions' => '-6.614890',
            'latitude_institutions' => '106.812890',
        ]);

        Institutions::create([
            'id_institutions' => '9ed81d0a-e58a-3d0b-9dd3-91eafab5266f',
            'name_institutions' => 'Palang Merah Indonesia Banyuwangi',
            'contact_institutions' => '(0332) 421868',
            'email_institutions' => 'cspmibanyuwangi@pmi.co.id',
            'address_institutions' => 'Jl. R. A. Kartini, Kepatihan, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68411',
            'longitude_institutions' => '-8.211760',
            'latitude_institutions' => '114.377610',
        ]);

        Institutions::create([
            'id_institutions' => '731ef6df-6171-33fd-bd05-93cd76db2cdd',
            'name_institutions' => 'PMI Cabang Kota Kediri',
            'contact_institutions' => '(0354) 689072',
            'email_institutions' => 'pmikediri@pmi.co.id',
            'address_institutions' => 'Jl. Mayor Bismo No.15, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64121',
            'longitude_institutions' => '-7.795520',
            'latitude_institutions' => '112.009530',
        ]);

        Institutions::create([
            'id_institutions' => '9e33b53c-d6e2-3b2b-9335-0c6b626981d3',
            'name_institutions' => 'PMI Palang Merah Indonesia',
            'contact_institutions' => '6285755538777',
            'email_institutions' => 'malang@pmi.co.id',
            'address_institutions' => 'Jl. Raya Sidorahayu, Losari, Sidorahayu, Kec. Wagir, Kabupaten Malang, Jawa Timur 65158',
            'longitude_institutions' => '-8.012460',
            'latitude_institutions' => '112.594800',
        ]);
    }
}