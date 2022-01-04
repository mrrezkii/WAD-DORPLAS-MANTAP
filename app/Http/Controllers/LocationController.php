<?php

namespace App\Http\Controllers;


use App\Models\BloodBank;

class LocationController extends Controller
{
    public function index()
    {
        return view('pages.location.index', [
            'title' => 'Lokasi',
            'active' => 'location',
            'datas' => BloodBank::all()
        ]);
    }
}
