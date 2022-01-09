<?php

namespace App\Http\Controllers;

use App\Models\Donators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register.index', [
            'title' => 'Daftar',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name_donators' => 'required|max:255',
            'email_donators' => 'required|email:dns|unique:donators,email_donators,NULL,id_donators',
            'blood_type_donators' => 'required|max:255',
            'rhesus_type_donators' => 'required|max:255',
            'contact_donators' => 'required|max:20',
            'address_donators' => 'required',
            'password_donators' => 'required|min:5|max:255'
        ]);

        $validateData['id_donators'] = Uuid::uuid4()->toString() . "\n";
        $validateData['password_donators'] = Hash::make($validateData['password_donators']);


        Donators::create($validateData);

        return redirect('/login')->with('registrationSuccess', 'Berhasil Melakukan Registrasi');
    }
}
