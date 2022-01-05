<?php

namespace App\Http\Controllers;


use App\Models\BloodBank;
use App\Models\DonorSubmissions;
use Faker\Core\Blood;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class DashboardController extends Controller
{
    public function index()
    {
        $article = new ArticleController();
        return view('pages.dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'articleData' => $article->getArticle(),
            'stockPlasma' => $this->stockPlasma(),
            'totalRequest' => $this->requestPlasma()
        ]);
    }

    public function stockPlasma()
    {
        $bloodBank = BloodBank::all();
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
            ->where('status_donor_submissions', '1')
            ->orWhere('status_donor_submissions', '2')
            ->sum('quantity_donor_submissions');
    }
}
