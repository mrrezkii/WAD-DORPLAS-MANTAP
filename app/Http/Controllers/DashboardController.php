<?php

namespace App\Http\Controllers;


use App\Models\BloodBank;
use App\Models\DonorNotes;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

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
            'totalRequest' => $this->requestPlasma(),
            'schedules' => $this->schedule(),
            'covidData' => $this->getCovid()
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

    public function schedule()
    {
        return DonorNotes::where('status_donor_notes', '=', '3')->get();

    }


    public function getCovid()
    {
        $client = new Client;
        $results = $client->request('GET', 'https://apicovid19indonesia-v2.vercel.app/api/indonesia/harian');

        $array = json_decode($results->getBody()->getContents(), true);
        $collection = collect($array);
        return $collection;
    }
}
