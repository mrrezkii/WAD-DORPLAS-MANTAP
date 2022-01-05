<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function index()
    {
        return view('pages.login.index', [
            'title' => 'Masuk',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email_donators' => 'required',
            'password_donators' => 'required'
        ]);


        if (Auth::guard('donator')->attempt($credentials)) {
//            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed');

    }

}

