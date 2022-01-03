<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ]);
    }
}
