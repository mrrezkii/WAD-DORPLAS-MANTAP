<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employees::factory(5)->create();

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '731ef6df-6171-33fd-bd05-93cd76db2cdd',
            'name_employees' => '(Admin) Muhammad Rezki Ananda',
            'email_employees' => 'muhammad.rezki.ananda@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '085608845319',
            'address_employees' => 'Jl.Kediri Raya Weeh, Jawa Timur'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '272f8cd3-f856-37f0-ac40-94c3b36d52da',
            'name_employees' => '(Admin) Alif Yanuar Aditya Subagyo',
            'email_employees' => 'michelyanuar@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '087772934259',
            'address_employees' => 'Jln. Isekai, mantep mantep aselole jos jos jos'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
            'name_employees' => '(Admin) Bagus Tri Atmaja',
            'email_employees' => 'bagustri734@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '082145198847',
            'address_employees' => 'Jl bukan jokowi no 69 kyoto, jepang'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
            'name_employees' => '(Admin) Muhammad Ihsan Izzulhaq',
            'email_employees' => 'mi.izzulhaq@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '081286226512',
            'address_employees' => 'Jl. Aster, Kab. Tokyo - Japan'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0264db2d-0f84-32ef-b732-d56d7b3d0493',
            'name_employees' => '(Admin) Yanuar Taruna Lutfi',
            'email_employees' => 'hanstarunal@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '082318968902',
            'address_employees' => 'Jl. Bandung Garut Km. 27 Sumedang'
        ]);
    }
}
