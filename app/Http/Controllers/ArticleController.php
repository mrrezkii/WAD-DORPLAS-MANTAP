<?php

namespace App\Http\Controllers;


class ArticleController extends Controller
{
    public function index(){
        return view('pages.article.index', [
            'title' => 'Artikel',
            'active' => 'article',
        ]);
    }
}
