<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountEmployeeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardEmployeeController;
use App\Http\Controllers\DonorNoteController;
use App\Http\Controllers\DonorNoteEmployeeController;
use App\Http\Controllers\DonorSubmissionController;
use App\Http\Controllers\DonorSubmissionEmployeeController;
use App\Http\Controllers\BankBloodEmployeeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventEmployeeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return redirect('/dashboard');
});

Route::middleware(['user_not_login'])->group(function () {
    {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'authenticate']);
        Route::get('/register', [RegisterController::class, 'index']);
        Route::post('/register', [RegisterController::class, 'store']);
    }
});

Route::middleware(['auth:donator'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/location', [LocationController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
    Route::get('/donor', [DonorNoteController::class, 'index']);
    Route::post('/donor', [DonorNoteController::class, 'store']);
    Route::get('/submission', [DonorSubmissionController::class, 'index']);
    Route::post('/submission', [DonorSubmissionController::class, 'store']);
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/account', [AccountController::class, 'index']);
    Route::put('/updatePhoto', [AccountController::class, 'updatePhoto']);
    Route::put('/updateIdentity', [AccountController::class, 'updateIdentity']);
    Route::put('/updateContact', [AccountController::class, 'updateContact']);
    Route::put('/updatePassword', [AccountController::class, 'updatePassword']);
    Route::get('/faq', [FaqController::class, 'index']);
});

Route::middleware(['auth:employee'])->group(function () {
    Route::get('/_dashboard', [DashboardEmployeeController::class, 'index']);
    Route::get('/_bank', [BankBloodEmployeeController::class, 'index']);
    Route::resource('/_donor', DonorNoteEmployeeController::class);
    Route::put('/_donor', [DonorNoteEmployeeController::class, 'update']);
    Route::delete('/_donor', [DonorNoteEmployeeController::class, 'destroy']);
    Route::resource('/_submission', DonorSubmissionEmployeeController::class);
    Route::put('/_submission', [DonorSubmissionEmployeeController::class, 'update']);
    Route::delete('/_submission', [DonorSubmissionEmployeeController::class, 'destroy']);
    Route::resource('/_event', EventEmployeeController::class);
    Route::put('/_event', [EventEmployeeController::class, 'update']);
    Route::delete('/_event', [EventEmployeeController::class, 'destroy']);
    Route::get('/_account', [AccountEmployeeController::class, 'index']);
    Route::put('/_updateIdentity', [AccountEmployeeController::class, 'updateIdentity']);
    Route::put('/_updateContact', [AccountEmployeeController::class, 'updateContact']);
    Route::put('/_updatePassword', [AccountEmployeeController::class, 'updatePassword']);
    Route::get('/_faq', [FaqController::class, 'index']);
});

Route::middleware(['auth:donator,employee'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
});