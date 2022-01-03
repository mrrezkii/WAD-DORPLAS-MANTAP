<?php

namespace App\Http\Controllers;

class AccountController extends Controller
{
    public function index(){
        return view('pages.account.index', [
            'title' => 'Akun',
            'active' => 'account',
        ]);
    }
}
