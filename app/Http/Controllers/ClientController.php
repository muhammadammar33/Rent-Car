<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function addClient(Request $req){
        $client = DB::table('clients')
                    ->insert(
                        [
                            'email' => $req->signupEmail,
                            'number' => $req->signupPhone,
                            'cnic'=> $req->signupCNIC,
                            'username' => $req->signupUsername,
                            'password' => $req->signupPassword,
                        ]
                    );

        if ($client) {
            return redirect("/");
        } else {
            echo "<h1>Client not added</h1>";
        }
    }

    public function checkClient(Request $req){
        
        // $data =  $req->input();
        // $req->session()->put('client', $data['loginUsername']);
        // return redirect("/dashboard");

        $client = DB::table('clients')
                    ->where('username', $req->loginUsername)
                    ->where('password', $req->loginPassword)
                    ->first();

        if ($client) {
            $data =  $req->input();
            $req->session()->put('client', $data['loginUsername']);
            // echo session('client');
            return redirect("/dashboard");
        } else {
            echo "<h1>Client not found</h1>";
        }
        // $req->session()->flush();
    }

    // public function clientLogin(Request $req){
    //     return $req->input();
    // }
}
