<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankBloodEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.bank.index', [
            'title' => 'Bank Darah',
            'active' => 'bank',
            'stockPlasma' => $this->stockPlasma(),
            'totalRequest' => $this->requestPlasma(),
            'bloodBank' => $this->bloodBank()
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

    public function bloodBank()
    {
        return BloodBank::where('id_institutions', '=', Auth::user()->id_institutions)->get();
    }

    public function updateStock(Request $request)
    {
        $validateData = $request->validate([
            'a_positive_blood_bank' => 'required',
            'a_negative_blood_bank' => 'required',
            'ab_positive_blood_bank' => 'required',
            'ab_negative_blood_bank' => 'required',
            'b_positive_blood_bank' => 'required',
            'b_negative_blood_bank' => 'required',
            'o_positive_blood_bank' => 'required',
            'o_negative_blood_bank' => 'required',
            'modified_by' => 'required',
        ]);

        BloodBank::where('id_institutions', '=', Auth::user()->id_institutions)->update($validateData);

        return redirect('/_bank')->with('updateSuccess', 'Berhasil Memperbarui Bank Darah');
    }
}
