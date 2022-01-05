<?php

namespace App\Http\Controllers;


class DonorNoteController extends Controller
{
    public function index(){
        $dashboard = new DashboardController();
        return view('pages.donor.index', [
            'title' => 'Donor',
            'active' => 'donor',
            'stockPlasma' => $dashboard->stockPlasma(),
            'totalRequest' => $dashboard->requestPlasma()
        ]);
    }
}
