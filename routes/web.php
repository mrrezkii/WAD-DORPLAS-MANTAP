<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorNoteController;
use App\Http\Controllers\DonorSubmissionController;
use App\Http\Controllers\EventController;
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


Route::middleware(['guest'])->group(function () {
    {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'authenticate']);
        Route::get('/register', [RegisterController::class, 'index']);
        Route::post('/register', [RegisterController::class, 'store']);
    }
});

Route::middleware(['auth:donator'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/location', [LocationController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
    Route::get('/donor', [DonorNoteController::class, 'index']);
    Route::get('/submission', [DonorSubmissionController::class, 'index']);
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/account', [AccountController::class, 'index']);
    Route::get('/faq', [FaqController::class, 'index']);
});

