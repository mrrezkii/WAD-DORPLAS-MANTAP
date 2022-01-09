<?php

namespace App\Http\Controllers;

use App\Models\DonorEvents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class EventEmployeeController extends Controller
{

    public function index()
    {
        return view('pages.event.admin', [
            'title' => 'Acara',
            'active' => 'event',
        ]);
    }

    public function data()
    {
        $model = DonorEvents::where("id_institutions", "=", Auth::user()->id_institutions)->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('thumbnail_donor_events', function ($model) {
                return '<img src="' . $model->thumbnail_donor_events . '" height="100px">';
            })
            ->addColumn('date_donor_events', function ($model) {
                $start = Carbon::parse($model->start_date_donor_events)->translatedFormat("d/m/Y");
                $end = Carbon::parse($model->end_date_donor_events)->translatedFormat("d/m/Y");
                return "$start - $end";
            })
            ->addColumn('time_donor_events', function ($model) {
                $start = Carbon::parse($model->start_time_donor_events)->translatedFormat("h:i");
                $end = Carbon::parse($model->end_time_donor_events)->translatedFormat("h:i");
                return "$start - $end";
            })
            ->addColumn('action', function ($model) {
                return (string)view('pages.event.admin_action', ['model' => $model]);
            })
            ->rawColumns(['thumbnail_donor_events', 'date_donor_events', 'time_donor_events', 'action'])
            ->toJson();
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
