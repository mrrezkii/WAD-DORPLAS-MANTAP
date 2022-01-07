<?php

namespace App\Http\Controllers;

use App\Models\Donators;
use App\Models\DonorNotes;
use App\Models\DonorSubmissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.account.index', [
            'title' => 'Akun',
            'active' => 'account',
            'donorNotes' => $this->donorNotes(),
            'donorSubmissions' => $this->donorSubmissions()
        ]);
    }

    public function donorNotes()
    {
        $idDonators = Auth::check() ? Auth::id() : true;
        return DonorNotes::where('id_donators', '=', $idDonators)->get();
    }

    public function donorSubmissions()
    {
        $idDonators = Auth::check() ? Auth::id() : true;
        return DonorSubmissions::where('id_donators', '=', $idDonators)->get();
    }

    public function updatePhoto(Request $request)
    {

    }

    public function updateIdentity(Request $request)
    {
        $idDonators = Auth::check() ? Auth::id() : true;
        $validateData = $request->validate([
            'name_donators' => 'required|max:255',
            'gender_donators' => 'required|max:255',
            'blood_type_donators' => 'required|max:255',
            'rhesus_type_donators' => 'required|max:255',
        ]);


        Donators::where('id_donators', '=', $idDonators)->update($validateData);

        return redirect('/account')->with('updateSuccess', 'Berhasil Memperbarui Identitas');;
    }

    public function updateContact(Request $request)
    {
        $idDonators = Auth::check() ? Auth::id() : true;
        $validateData = $request->validate([
            'email_donators' => 'required|max:255|email:dns|unique:donators,email_donators,NULL,id_donators',
            'address_donators' => 'required',
            'contact_donators' => 'required|max:20|unique:donators,contact_donators,NULL,id_donators',
        ]);

        Donators::where('id_donators', '=', $idDonators)->update($validateData);

        return redirect('/account')->with('updateSuccess', 'Berhasil Memperbarui Kontak');;
    }

    public function updatePassword(Request $request)
    {

    }
}
