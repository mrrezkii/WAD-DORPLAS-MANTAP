<?php

namespace App\Http\Controllers;


use App\Models\BloodBank;

class LocationController extends Controller
{
    public function index()
    {
        $bloodBank = BloodBank::all();
        if (request('search')) {
            $bloodBank = BloodBank::whereRelation('institutions', 'name_institutions', 'like', '%' . request('search') . '%')
                ->orWhereRelation('institutions', 'address_institutions', 'like', '%' . request('search') . '%')
                ->get();
        }

        return view('pages.location.index', [
            'title' => 'Lokasi',
            'active' => 'location',
            'datas' => $bloodBank
        ]);
    }
}
