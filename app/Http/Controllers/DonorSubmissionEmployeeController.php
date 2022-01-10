<?php

namespace App\Http\Controllers;

use App\Models\DonorSubmissions;
use App\Models\StatusDonor;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class DonorSubmissionEmployeeController extends Controller
{

    public function index()
    {
        return view('pages.donor.submission_admin', [
            'title' => 'Request Plasma',
            'active' => 'submission',
        ]);
    }

    public function data()
    {
        $model = DonorSubmissions::where("id_institutions", "=", Auth::user()->id_institutions)->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('rhesus_type_donor_submissions', function ($model) {
                if ($model->rhesus_type_donor_submissions == 'positive') {
                    return "Positif (+)";
                } else if ($model->rhesus_type_donor_submissions == 'negative') {
                    return "Negatif (-)";
                }
                return $model->rhesus_type_donor_submissions;
            })
            ->addColumn('time_used_donor_submissions', function ($model) {
                if ($model->time_used_donor_submissions == null){
                    return "-";
                }
                return Carbon::parse($model->time_used_donor_submissions)->translatedFormat("D, d-m-Y, h:i");
            })
            ->addColumn('ktp_donor_submissions', function ($model) {
                return '<img src="' . $model->ktp_donor_submissions . '" height="100px">';
            })
            ->addColumn('letter_donor_submissions', function ($model) {
                return '<img src="' . $model->letter_donor_submissions . '" height="100px">';
            })
            ->addColumn('donators.name_donators', function (DonorSubmissions $donorSubmissions) {
                return $donorSubmissions->donators->name_donators;
            })
            ->addColumn('status.name_status_donor', function ($model) {
                if ($model->status_donor_submissions == 1) {
                    return '<p class="text-red">' . $model->status->name_status_donor . '</p>';
                } else if ($model->status_donor_submissions == 2) {
                    return '<p class="text-primary">' . $model->status->name_status_donor . '</p>';
                } else if ($model->status_donor_submissions == 3) {
                    return '<p class="text-success">' . $model->status->name_status_donor . '</p>';
                } else if ($model->status_donor_submissions == 4) {
                    return '<p class="text-red-2">' . $model->status->name_status_donor . '</p>';
                }

                return '<p class="text-secondary">' . $model->status->name_status_donor . '</p>';
            })
            ->addColumn('action', function ($model) {
                return (string)view('pages.donor.submission_admin_action', ['model' => $model]);
            })
            ->addColumn('modified_by', function ($model) {
                if ($model->modified_by == null) {
                    return "-";
                }
                return $model->modified_by;
            })
            ->rawColumns(['letter_donor_submissions', 'ktp_donor_submissions', 'status.name_status_donor', 'action'])
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
        $data = DonorSubmissions::find($id);
        return view('pages.donor.submission_admin_edit', [
            'title' => 'Request Paslma',
            'active' => 'submission',
            'data' => $data,
            'status' => StatusDonor::all()
        ]);
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'quantity_donor_submissions' => 'required',
            'status_donor_submissions' => 'required',
            'modified_by' => 'required',
        ]);

        if ($request->time_used_donor_submissions == null) {
            $validateData['time_used_donor_submissions'] = null;
        }

        DonorSubmissions::where('id_donor_submissions', '=', $id)->update($validateData);

        return redirect('/_submission')->with('info', "Data donor berhasil diupdate");
    }


    public function destroy($id)
    {
        try {
            $data = DonorSubmissions::findOrFail($id);
            $data->delete();
            if (File::exists(public_path($data->ktp_donor_submissions))) {
                File::delete(public_path($data->ktp_donor_submissions));
            }
            if (File::exists(public_path($data->letter_donor_submissions))) {
                File::delete(public_path($data->letter_donor_submissions));
            }
            return redirect('/_submission')->with('info', "Request plasma berhasil dihapus");
        } catch (Exception $e) {
            return redirect('/_submission')->with('info', "Request plasma gagal dihapus");
        }
    }
}
