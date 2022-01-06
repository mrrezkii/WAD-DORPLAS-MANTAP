<?php

namespace App\Http\Controllers;


use App\Models\DonorNotes;
use App\Models\Institutions;
use Illuminate\Http\Request;

class DonorNoteController extends Controller
{
    public function index()
    {
        return view('pages.donor.index', [
            'title' => 'Donor',
            'active' => 'donor',
            'stockPlasma' => $this->dashboard()->stockPlasma(),
            'totalRequest' => $this->dashboard()->requestPlasma(),
            'institutions' => Institutions::all()
        ]);
    }

    public function dashboard()
    {
        return new DashboardController();
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'id_donators' => 'required|max:255',
            'id_institutions' => 'required|max:255',
            'schedule_donor_notes' => 'required|date|after:yesterday',
        ]);

        $validateData['status_donor_notes'] = 1;

        DonorNotes::create($validateData);


        return redirect('/donor')->with('donorSuccess', 'Berhasil melakukan pendaftaran donor plasma, silahkan pantau di menu akun');
    }
}
