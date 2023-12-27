<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function addBooking(Request $req){
        $booking = DB::table('bookings')
                    ->insert(
                        [
                            'make' => $req->make,
                            'model' => $req->model,
                            'date' => $req->date,
                            'days'=> $req->days,
                            'paymentmethod' => $req->paymentmethod,
                        ]
                    );

        if ($booking) {
            if (Session::has('client')) {
                // Redirect to the '/booking' route
                return view('/user');
            } else {
                // Redirect to the '/raclogin' route
                return view('/raclogin', ['car' => $car]);
            }
        } else {
            echo "<h1>Client not added</h1>";
        }
    }

    public function showBookings(){
        $bookings = DB::table('bookings')->get();
        return view('viewbookings', ['data' => $bookings]);
    }

    public function deleteBooking(string $id){
        $booking = DB::table('bookings')->where('id', $id)->delete();

        // return $car;
        if ($booking) {
            return redirect()->route('showBookings');
        } else {
            echo "<h1>Data not Deleted</h1>";
        }
    }
}
