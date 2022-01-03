<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login.index', [
            'title' => 'Masuk',
            'active' => 'login',
        ]);
    }
}