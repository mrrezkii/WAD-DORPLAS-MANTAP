<?php

namespace App\Http\Controllers;

use App\Models\DonorSubmissions;
use Carbon\Carbon;
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
                return Carbon::parse($model->time_used_donor_submissions)->translatedFormat("D, d-m-Y");
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
            ->addColumn('status.name_status_donor', function (DonorSubmissions $donorSubmissions) {
                if ($donorSubmissions->status_donor_submissions == 1) {
                    return '<p class="text-red">' . $donorSubmissions->status->name_status_donor . '</p>';
                } else if ($donorSubmissions->status_donor_submissions == 2) {
                    return '<p class="text-primary">' . $donorSubmissions->status->name_status_donor . '</p>';
                } else if ($donorSubmissions->status_donor_submissions == 3) {
                    return '<p class="text-success">' . $donorSubmissions->status->name_status_donor . '</p>';
                } else if ($donorSubmissions->status_donor_submissions == 4) {
                    return '<p class="text-red-2">' . $donorSubmissions->status->name_status_donor . '</p>';
                }

                return '<p class="text-secondary">' . $donorSubmissions->status->name_status_donor . '</p>';
            })
            ->addColumn('action', function ($model) {
                return (string)view('pages.donor.submission_admin_action', ['model' => $model]);
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