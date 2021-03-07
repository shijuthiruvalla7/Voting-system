<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userAccout;

class votingController extends Controller
{   

    public function home(){
        return view('index');
    }


    public function register(Request $request){
        dd($request);
    }

    public function login(Request $request){
        dd($request);
    }

    

}
