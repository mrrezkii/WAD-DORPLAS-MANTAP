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
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginFailed', 'Email atau password tidak cocok');
    }

    public function logout()
    {
        Auth::guard('donator')->logout();
        header("cache-Control:no-store,no-cache, must-revalidate");
        header("cache-Control:post-check=0,pre-check=0", false);
        header("Pragma:no-cache");
        header("Expires: Sat,26 Jul 1997 05:00:00: GMT");
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }

}

