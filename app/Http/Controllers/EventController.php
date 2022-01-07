<?php

namespace App\Http\Controllers;


use App\Models\DonorEvents;

class EventController extends Controller
{
    public function index()
    {

        $donorEvent = DonorEvents::all();
        if (request('search')) {
            $donorEvent = DonorEvents::whereRelation('institutions', 'name_institutions', 'like', '%' . request('search') . '%')
                ->orWhere('name_donor_events', 'like', '%' . request('search') . '%')
                ->orWhere('desc_donor_events', 'like', '%' . request('search') . '%')
                ->get();
        }

        return view('pages.event.index', [
            'title' => 'Acara',
            'active' => 'event',
            'datas' => $donorEvent
        ]);
    }
}
