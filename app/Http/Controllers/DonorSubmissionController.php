<?php

namespace App\Http\Controllers;


class DonorSubmissionController extends Controller
{
    public function index(){
        $dashboard = new DashboardController();
        return view('pages.donor.submission', [
            'title' => 'Request Plasma',
            'active' => 'donor',
            'stockPlasma' => $dashboard->stockPlasma(),
            'totalRequest' => $dashboard->requestPlasma()
        ]);
    }
}
