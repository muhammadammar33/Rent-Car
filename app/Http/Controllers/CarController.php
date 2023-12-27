<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    public function showCars(){
        $cars = DB::table('cars')->get();
        return view('cars', ['data' => $cars]);
    }

    public function carlisting(){
        $cars = DB::table('cars')->get();
        return view('carlisting', ['data' => $cars]);
    }

    public function viewCar(string $id){
        $car = Car::where('id', $id)->first();
        // return $car;
        return view('cardetail', ['car' => $car]);
    }

    public function viewBooking(string $model){
        $car = Car::where('model', $model)->first();
        // return $car;
        return view('cardetail', ['car' => $car]);
    }

    public function bookCar(string $id){
        $car = Car::where('id', $id)->first();

        // Check if 'client' session exists
        if (Session::has('client')) {
            // Redirect to the '/booking' route
            return view('/booking', ['car' => $car]);
        } else {
            // Redirect to the '/raclogin' route
            return redirect('/raclogin');
        }
    }

    public function addCar(Request $req){

        $imageName = time().'.'.$req->file('image')->extension();
        $req->image->move(public_path('cars'), $imageName);

        $car = new Car();
        $car->make = $req->make;
        $car->model = $req->model;
        $car->year = $req->year;
        $car->color = $req->color;
        $car->number = $req->number;
        $car->price = $req->price;
        $car->pic = $imageName;

        $car->save();

        return back()->withSuccess('Car added successfully');
    }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     // Handle file upload
    //     $imageName = time() . '.' . $request->image->extension();
    //     $request->image->move(public_path('carimages'), $imageName);

    //     // Store the image details in the database
    //     $image = new Image();
    //     $image->name = $imageName;
    //     $image->path = 'carimages/' . $imageName;
    //     $image->save();

    //     return view('admindashboard')->with('image',$image);
    // }

    public function deleteCar(string $id){
        $car = DB::table('cars')->where('id', $id)->delete();

        // return $car;
        if ($car) {
            return redirect()->route('showCars');
        } else {
            echo "<h1>Data not Deleted</h1>";
        }
    }

    public function updateCarPage(string $id){
        $car = Car::where('id', $id)->first();
        // return $car;
        return view('updatecar', ['car' => $car]);
        // $car = Car::where('id', $id)->first();
        // return view('updatecar', ['car' => $car]);
    }

    public function updateCar(Request $req, $id){

        $car = Car::where('id', $id)->first();

        if (isset($req->Pic)) {
            $imageName = time().'.'.$req->file('image')->extension();
            $req->image->move(public_path('cars'), $imageName);
            $car->Pic = $imageName;
        }

        $car->Make = $req->make;
        $car->Model = $req->model;
        $car->Year = $req->year;
        $car->Color = $req->color;
        $car->Number = $req->number;
        $car->Price = $req->price;
        

        $car->save();

        return back()->withSuccess('Car updated successfully');
    }

    // public function searchCar(Request $request)
    // {
    //     $query = $request->input('query');

    //     $results = Car::where('model', 'LIKE', "%$query%")->get();
    //     return response()->json($results);
    // }

    public function searchCar($term){
        $cars2 = DB::table('cars')->where ('Model','like',"$term%")->get();
        return ($cars2);
    }
}
