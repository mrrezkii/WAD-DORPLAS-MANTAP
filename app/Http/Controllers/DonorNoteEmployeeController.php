<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorNoteEmployeeController extends Controller
{

    public function index()
    {
        return view('pages.donor.admin', [
            'title' => 'Donor',
            'active' => 'donor',
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}