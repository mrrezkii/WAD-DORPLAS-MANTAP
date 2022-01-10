<?php

namespace App\Http\Controllers;

use App\Models\Donators;
use App\Models\DonorNotes;
use App\Models\StatusDonor;
use Carbon\Carbon;
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
            ->addColumn('donators.name_donators', function ($model) {
                return $model->donators->name_donators;
            })
            ->addColumn('donor_events.name_donor_events', function ($model) {
                if ($model->donor_events == null) {
                    return "-";
                } else {
                    return $model->donor_events->name_donor_events;
                }
            })
            ->addColumn('status.name_status_donor', function ($model) {
                if ($model->status_donor_notes == 1) {
                    return '<p class="text-red">' . $model->status->name_status_donor . '</p>';
                } else if ($model->status_donor_notes == 2) {
                    return '<p class="text-primary">' . $model->status->name_status_donor . '</p>';
                } else if ($model->status_donor_notes == 3) {
                    return '<p class="text-success">' . $model->status->name_status_donor . '</p>';
                } else if ($model->status_donor_notes == 4) {
                    return '<p class="text-red-2">' . $model->status->name_status_donor . '</p>';
                }

                return '<p class="text-secondary">' . $model->status->name_status_donor . '</p>';
            })
            ->addColumn('schedule_donor_notes', function ($model) {
                return Carbon::parse($model->schedule_donor_notes)->translatedFormat("D, d-m-Y");
            })
            ->addColumn('modified_by', function ($model) {
                if ($model->modified_by == null) {
                    return "-";
                }
                return $model->modified_by;
            })
            ->addColumn('action', function ($model) {
                return (string)view('pages.donor.admin_action', ['model' => $model]);
            })
            ->rawColumns(['status.name_status_donor', 'action'])
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
        $data = DonorNotes::find($id);
        return view('pages.donor.admin_edit', [
            'title' => 'Donor',
            'active' => 'donor',
            'data' => $data,
            'status' => StatusDonor::all()
        ]);
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'status_donor_notes' => 'required',
            'modified_by' => 'required',
            'id_donators' => 'required'
        ]);

        if ($request->point_donor_events != 0 && $request->status_donor_notes == 3) {
            $donators = Donators::where('id_donators', '=', $request->id_donators)->get();
            $point_donators = $donators[0]->point_donators + $request->point_donor_events;

            Donators::where('id_donators', '=', $request->id_donators)->update([
                'point_donators' => $point_donators
            ]);

        }


        DonorNotes::where('id_donor_notes', '=', $id)->update($validateData);

        return redirect('/_donor')->with('info', "Data donor berhasil diupdate");
    }


    public function destroy($id)
    {
        $data = DonorNotes::findOrFail($id);
        $data->delete();

        return redirect('/_donor')->with('info', "Donor berhasil dihapus");
    }
}
