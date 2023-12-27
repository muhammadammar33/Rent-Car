<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;

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

Route::get('/user', function () {
    return view('user');
});

Route::controller(ClientController::class)->group(function () {
    Route::post('/add', 'addClient')->name('addClient');
    Route::post('/check', 'checkClient')->name('checkClient');
    // Route::post('/client', 'clientLogin')->name('client');
});

Route::controller(ReviewController::class)->group(function () {
    Route::post('/addReview', 'addReview')->name('addReview');
});

Route::controller(BookingController::class)->group(function () {
    Route::post('/addBooking', 'addBooking')->name('addBooking');
    Route::get('showBookings', 'showBookings')->name('showBookings');
    Route::get('/deleteBooking/{id}', 'deleteBooking')->name('deleteBooking');
});

Route::controller(CarController::class)->group(function () {
    Route::get('showCars', 'showCars')->name('showCars');
    Route::get('carlisting', 'carlisting')->name('carlisting');
    Route::post('/addCar', 'addCar')->name('addCar');
    Route::get('/viewcar/{id}', 'viewCar')->name('viewCar');
    Route::get('/viewBooking/{model}', 'viewBooking')->name('viewBooking');
    Route::get('/bookCar/{id}', 'bookCar')->name('bookCar');
    Route::get('/deleteCar/{id}', 'deleteCar')->name('deleteCar');
    Route::post('/updateCar/{id}', 'updateCar')->name('updateCar');
    Route::get('/updateCarPage/{id}', 'updateCarPage')->name('updateCarPage');
    Route::get('/showCars/{term}','searchCar')->name('searchCar');
    Route::get('/carlisting/{term}', 'searchCar')->name('carlisting');
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
    return redirect ('/');
});

Route::get('/adminlogout', function () {
    if (session()->has('admin')) {
        session()->pull('admin');
    }
    return redirect ('/');
});

Route::get('/book', function () {
    if (session()->has('client')) {
        return redirect('/booking');
    }else {
        return redirect('/raclogin');
    }
});

Route::get('/back', function () {
    if (session()->has('admin')) {
        return redirect('/showCars');
    }else {
        return redirect ('/carlisting');
    }
    
});

Route::get('/cardetail', function () {
    return view('cardetail');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/addnewcar', function () {
    return view('addnewcar');
});

// Route::get('/carlisting', function () {
//     return view('carlisting');
// });


