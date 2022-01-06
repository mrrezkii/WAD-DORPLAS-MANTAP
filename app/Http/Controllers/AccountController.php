<?php

namespace App\Http\Controllers;

use App\Models\DonorNotes;
use App\Models\DonorSubmissions;
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
}
