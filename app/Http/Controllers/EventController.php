<?php

namespace App\Http\Controllers;


class EventController extends Controller
{
    public function index(){
        return view('pages.event.index', [
            'title' => 'Acara',
            'active' => 'event',
        ]);
    }
}
