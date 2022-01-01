<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
});

Route::get('/location', function () {
    return view('pages.location.index', [
        'title' => 'Lokasi',
        'active' => 'location',
    ]);
});

Route::get('/event', function () {
    return view('pages.event.index', [
        'title' => 'Acara',
        'active' => 'event',
    ]);
});

Route::get('/article', function () {
    return view('pages.article.index', [
        'title' => 'Artikel',
        'active' => 'article',
    ]);
});

Route::get('/donor', function () {
    return view('pages.donor.index', [
        'title' => 'Donor',
        'active' => 'donor',
    ]);
});

Route::get('/request', function () {
    return view('pages.donor.request', [
        'title' => 'Request',
        'active' => 'donor',
    ]);
});



