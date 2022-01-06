<?php

namespace App\Http\Controllers;


class DonorNoteController extends Controller
{
    public function index()
    {
        return view('pages.donor.index', [
            'title' => 'Donor',
            'active' => 'donor',
            'stockPlasma' => $this->dashboard()->stockPlasma(),
            'totalRequest' => $this->dashboard()->requestPlasma()
        ]);
    }

    public function dashboard()
    {
        return new DashboardController();
    }
}
