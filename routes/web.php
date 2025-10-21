<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



// Guest routes (login & register)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

// Protected route - only for authenticated users
Route::get('/user_dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('user_dashboard');

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about'); // make sure this view exists
})->name('about');

Route::get('/FAQs', function () {
    return view('FAQs'); // make sure this view exists
})->name('FAQs');

Route::get('/user_profile', function () {
    return view('user_profile'); // make sure this view exists
})->name('user_profile');

Route::get('/user_vote', function () {
    return view('user_vote'); // make sure this view exists
})->name('user_vote');

Route::get('/user_results', function () {
    return view('user_results'); // make sure this view exists
})->name('user_results');


Route::get('/user_voter_guidelines', function () {
    return view('user_voter_guidelines'); // make sure this view exists
})->name('user_voter_guidelines');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
