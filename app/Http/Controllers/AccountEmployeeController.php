<?php

namespace App\Http\Controllers;

use App\Models\Donators;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.account.admin', [
            'title' => 'Akun',
            'active' => 'account',
        ]);
    }

    public function updateIdentity(Request $request)
    {
        $idEmployees = Auth::check() ? Auth::id() : true;
        $validateData = $request->validate([
            'name_employees' => 'required|max:255',
        ]);

        Employees::where('id_employees', '=', $idEmployees)->update($validateData);
        return redirect('/_account')->with('updateSuccess', 'Berhasil Memperbarui Identitas');
    }

   
}
