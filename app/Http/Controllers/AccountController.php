<?php

namespace App\Http\Controllers;

use App\Models\Donators;
use App\Models\DonorNotes;
use App\Models\DonorSubmissions;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $idDonators = Auth::check() ? Auth::id() : true;
        $validateData = $request->validate([
            'profile_images_donators' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf',
        ]);

        $uuidShorten = str_replace('-', '', $idDonators);
        $file = $request->file('profile_images_donators');

        $name = time() . "_" . $uuidShorten . "_" . $file->getClientOriginalName();
        $path = "upload/$uuidShorten/photo";
        $file->move($path, $name);

        $data = Donators::findOrFail($idDonators);
        if (File::exists(public_path($data->profile_images_donators))) {
            File::delete(public_path($data->profile_images_donators));
        }

        $validateData['profile_images_donators'] = "/$path/$name";
        Donators::where('id_donators', '=', $idDonators)->update($validateData);

        return redirect('/account')->with('updateSuccess', 'Berhasil Memperbarui Foto');
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

        return redirect('/account')->with('updateSuccess', 'Berhasil Memperbarui Identitas');
    }

    public function updateContact(Request $request)
    {
        $idDonators = Auth::check() ? Auth::id() : true;
        $validateData = $request->validate([
            'email_donators' => 'required|max:255|email:dns|unique:donators,email_donators,NULL,id_donators',
            'address_donators' => 'required',
            'contact_donators' => 'required|max:20',
        ]);

        Donators::where('id_donators', '=', $idDonators)->update($validateData);

        return redirect('/account')->with('updateSuccess', 'Berhasil Memperbarui Kontak');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::guard('donator')->user();
        $userPassword = $user->password_donators;

        if (!Hash::check($request->old_password_donators, $userPassword)) {
            return back()->withErrors(['old_password_donators' => 'Password not match']);
        }

        $request->validate([
            'old_password_donators' => 'required|min:5|max:255',
            'new_password_donators' => 'required|min:5|max:255'
        ]);

        $user->password_donators = Hash::make($request->new_password_donators);
        $user->save();

        return redirect('/account')->with('updateSuccess', 'Berhasil Memperbarui Password');
    }
}
