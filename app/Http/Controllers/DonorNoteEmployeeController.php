<?php

namespace App\Http\Controllers;

use App\Models\DonorNotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class DonorNoteEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('pages.donor.admin', [
            'title' => 'Donor',
            'active' => 'donor',
        ]);
    }

    public function data()
    {
        $model = DonorNotes::where("id_institutions", "=", Auth::user()->id_institutions)->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('donators.name_donators', function (DonorNotes $donorNotes) {
                return $donorNotes->donators->name_donators;
            })
            ->addColumn('donor_events.name_donor_events', function (DonorNotes $donorNotes) {
                if ($donorNotes->donor_events == null) {
                    return "-";
                } else {
                    return $donorNotes->donor_events->name_donor_events;
                }
            })
            ->addColumn('status.name_status_donor', function (DonorNotes $donorNotes) {
                return $donorNotes->status->name_status_donor;
            })
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
