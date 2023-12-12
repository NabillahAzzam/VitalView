<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/calculation-page', function () {
    return view('calculationPage');
});

Route::get('/detail-resep', function () {
    return view('detailResep');
});

Route::get('/detail-workout', function () {
    return view('detailWorkout');
});

Route::get('/rekomendasi-makanan-desc', function () {
    return view('rekomendasiMakananDesk');
});

Route::get('/rekomendasi-makanan-home', function () {
    return view('rekomendasiMakananHome');
});

Route::get('/rekomendasi-workout-home', function () {
    return view('rekomendasiWorkoutHome');
});

Route::get('/bmi-calculator', function () {
    return view('bmiCalculator');
});


