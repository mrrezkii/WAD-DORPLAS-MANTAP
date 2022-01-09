<?php

namespace App\Http\Controllers;


use App\Models\DonorSubmissions;
use App\Models\Institutions;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class DonorSubmissionController extends Controller
{
    public function index()
    {
        return view('pages.donor.submission', [
            'title' => 'Request Plasma',
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
            'recipient_donor_submissions' => 'required|max:255',
            'applicant_donor_submissions' => 'required|max:255',
            'blood_type_donor_submissions' => 'required|max:2',
            'rhesus_type_donor_submissions' => 'required|max:255',
            'quantity_donor_submissions' => 'required|max:255',
            'id_institutions' => 'required|max:255',
            'ktp_donor_submissions' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'letter_donor_submissions' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $ktpFile = $request->file('ktp_donor_submissions');
        $letterFile = $request->file('letter_donor_submissions');

        $uuidShorten = str_replace('-', '', $request->id_donators);
        $ktpName = time() . "_" . $uuidShorten . "_" . $ktpFile->getClientOriginalName();
        $letterName = time() . "_" . $uuidShorten . "_" . $letterFile->getClientOriginalName();

        $ktpPath = "upload/$uuidShorten/ktp";
        $letterPath = "upload/$uuidShorten/letter";

        $ktpFile->move($ktpPath, $ktpName);
        $letterFile->move($letterPath, $letterName);

        $validateData['id_donor_submissions'] = Uuid::uuid4()->toString() . "\n";
        $validateData['id_donators'] = $request->id_donators;
        $validateData['status_donor_submissions'] = 1;
        $validateData['quantity_donor_submissions'] = (int)$request->quantity_donor_submissions;
        $validateData['ktp_donor_submissions'] = "/$ktpPath/$ktpName";
        $validateData['letter_donor_submissions'] = "/$letterPath/$letterName";

        DonorSubmissions::create($validateData);


        return redirect('/submission')->with('submissionSuccess', 'Berhasil Request Plasma');
    }
}
