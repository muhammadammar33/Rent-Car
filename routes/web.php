<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('index');
});

Route::get('/raclogin', function () {
    return view('raclogin');
});

Route::get('/racsignup', function () {
    return view('racsignup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::controller(ClientController::class)->group(function () {
    Route::post('/add', 'addClient')->name('addClient');
    Route::post('/check', 'checkClient')->name('checkClient');
    // Route::post('/client', 'clientLogin')->name('client');
});

// Route::get('/raclogin', function () {
//     if (session()->has('client')) {
//         return redirect ('dashboard');
//     }
//     return view ('raclogin');
// });

Route::get('/logout', function () {
    if (session()->has('client')) {
        session()->pull('client');
    }
    return redirect ('raclogin');
});
