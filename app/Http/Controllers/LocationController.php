<?php

namespace App\Http\Controllers;


class LocationController extends Controller
{
    public function index() {
        return view('pages.location.index', [
            'title' => 'Lokasi',
            'active' => 'location',
        ]);
    }
}
