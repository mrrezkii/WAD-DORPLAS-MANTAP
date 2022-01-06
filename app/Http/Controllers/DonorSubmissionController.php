<?php

namespace App\Http\Controllers;


class DonorSubmissionController extends Controller
{
    public function index()
    {
        return view('pages.donor.submission', [
            'title' => 'Request Plasma',
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
