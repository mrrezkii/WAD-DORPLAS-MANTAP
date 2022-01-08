<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorSubmissionEmployeeController extends Controller
{

    public function index()
    {
        return view('pages.donor.submission_admin', [
            'title' => 'Request Plasma',
            'active' => 'submission',
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
