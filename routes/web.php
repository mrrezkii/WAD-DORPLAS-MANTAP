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
    return view('pages.dashboard.index', [
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

Route::get('/donor', function () {
    return view('pages.donor.index', [
        'title' => 'Donor',
        'active' => 'donor',
    ]);
});

Route::get('/submission', function () {
    return view('pages.donor.submission', [
        'title' => 'Request',
        'active' => 'donor',
    ]);
});

Route::get('/article', function () {
    return view('pages.article.index', [
        'title' => 'Artikel',
        'active' => 'article',
    ]);
});

Route::get('/account', function () {
    return view('pages.account.index', [
        'title' => 'Akun',
        'active' => 'account',
    ]);
});

Route::get('/faq', function () {
    return view('pages.faq.index', [
        'title' => 'FAQ',
        'active' => 'faq',
    ]);
});

Route::get('/login', function () {
    return view('pages.login.index', [
        'title' => 'Masuk',
        'active' => 'login',
    ]);
});

Route::get('/register', function () {
    return view('pages.register.index', [
        'title' => 'Daftar',
        'active' => 'register',
    ]);
});

