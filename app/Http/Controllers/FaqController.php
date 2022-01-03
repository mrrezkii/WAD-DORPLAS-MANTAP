<?php

namespace App\Http\Controllers;


class FaqController extends Controller
{
    public function index(){
        return view('pages.faq.index', [
            'title' => 'FAQ',
            'active' => 'faq',
        ]);
    }
}