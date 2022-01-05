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
            'id_institutions' => '1',
            'name_institutions' => 'PMI Jawa Barat Pusat',
            'contact_institutions' => '(022) 2500095',
            'email_institutions' => 'halo@pmijabar.or.id',
            'address_institutions' => 'Jl. Ir. H. Juanda No.426A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'longitude_institutions' => '-6.86324723578973',
            'latitude_institutions' => '107.62146541259783',
        ]);

        Institutions::create([
            'id_institutions' => '2',
            'name_institutions' => 'PMI Jawa Timur Pusat',
            'contact_institutions' => '(031) 5055173',
            'email_institutions' => ' jawa_timur@pmi.or.id',
            'address_institutions' => 'Jl. Karang Menjangan 22 Surabaya',
            'longitude_institutions' => '-7.263475929872024',
            'latitude_institutions' => '112.76294054132508',
        ]);

        Institutions::create([
            'id_institutions' => '3',
            'name_institutions' => 'PMI Surabaya',
            'contact_institutions' => '(031) 99443899',
            'email_institutions' => 'pmisurabaya@pmi.or.id',
            'address_institutions' => 'Jl. Sumatera No.71, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281',
            'longitude_institutions' => '-7.270122660967294',
            'latitude_institutions' => '112.7485233269915',
        ]);

        Institutions::create([
            'id_institutions' => '4',
            'name_institutions' => 'Unit Tranfusi Darah Palang Merah Indonesia Kota Surabaya',
            'contact_institutions' => '(031) 531328',
            'email_institutions' => 'contact.pmi@gmail.com',
            'address_institutions' => 'Jl. Embong Ploso No.7-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271',
            'longitude_institutions' => '-7.267914199486669',
            'latitude_institutions' => '112.74577088043364',
        ]);

        Institutions::create([
            'id_institutions' => '5',
            'name_institutions' => 'PMI Kota Bandung',
            'contact_institutions' => '(022) 4207052',
            'email_institutions' => 'pmi.bandung@pmijabar.or.id',
            'address_institutions' => 'Jl. Aceh No.79, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114',
            'longitude_institutions' => '-6.90850812347344',
            'latitude_institutions' => '107.61962559763123',
        ]);
    }
}
