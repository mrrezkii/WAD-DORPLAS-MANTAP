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
        'title' => 'Home',
        'active' => 'home',
    ]);
});

//Route::resource('/donator', DonatorController::class);
//Route::resource('/institution', InstitutionController::class);
//Route::resource('/donor-notes', DonorNoteController::class);
