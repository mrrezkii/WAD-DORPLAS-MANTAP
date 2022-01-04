<?php

namespace App\Http\Controllers;


use App\Models\DonorEvents;

class EventController extends Controller
{
    public function index()
    {
        return view('pages.event.index', [
            'title' => 'Acara',
            'active' => 'event',
            'datas' => DonorEvents::all()
        ]);
    }
}
