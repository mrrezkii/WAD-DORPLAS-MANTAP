<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard.admin', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'stockPlasma' => $this->stockPlasma(),
            'totalRequest' => $this->requestPlasma(),
        ]);
    }

    public function stockPlasma()
    {
        $bloodBank = BloodBank::where('id_institutions', '=', Auth::user()->id_institutions);
        $ap = $bloodBank->sum('a_positive_blood_bank');
        $an = $bloodBank->sum('a_negative_blood_bank');
        $abp = $bloodBank->sum('ab_positive_blood_bank');
        $abn = $bloodBank->sum('ab_negative_blood_bank');
        $bp = $bloodBank->sum('b_positive_blood_bank');
        $bn = $bloodBank->sum('b_negative_blood_bank');
        $op = $bloodBank->sum('o_positive_blood_bank');
        $on = $bloodBank->sum('o_negative_blood_bank');

        return $ap + $an + $abp + $abn + $bp + $bn + $op + $on;
    }

    public function requestPlasma()
    {
        return DB::table('donor_submissions')
            ->whereNested(function ($query) {
                $query
                    ->where('status_donor_submissions', '=', '2')
                    ->where('id_institutions', '=', Auth::user()->id_institutions);
            })
            ->sum('quantity_donor_submissions');
    }
}
