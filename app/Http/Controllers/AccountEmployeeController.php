<?php

namespace App\Http\Controllers;

class AccountEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        dd(Auth::user());
        return view('pages.account.admin', [
            'title' => 'Akun',
            'active' => 'account',
        ]);
    }
}
