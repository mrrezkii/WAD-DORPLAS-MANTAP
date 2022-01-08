<?php

namespace App\Http\Controllers;

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

    public function updateContact(Request $request)
    {
        $idEmployees = Auth::check() ? Auth::id() : true;
        $validateData = $request->validate([
            'email_employees' => 'required|max:255|email:dns|unique:employees,email_employees,NULL,id_employees',
            'address_employees' => 'required',
            'contact_employees' => 'required|max:20',
        ]);

        Employees::where('id_employees', '=', $idEmployees)->update($validateData);

        return redirect('/_account')->with('updateSuccess', 'Berhasil Memperbarui Kontak');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::guard('employee')->user();
        $userPassword = $user->password_employees;

        if (!Hash::check($request->old_password_employees, $userPassword)) {
            return back()->withErrors(['old_password_employees' => 'Password not match']);
        }

        $request->validate([
            'old_password_employees' => 'required|min:5|max:255',
            'new_password_employees' => 'required|min:5|max:255'
        ]);

        $user->password_employees = Hash::make($request->new_password_employees);
        $user->save();

        return redirect('/_account')->with('updateSuccess', 'Berhasil Memperbarui Password');
    }


}