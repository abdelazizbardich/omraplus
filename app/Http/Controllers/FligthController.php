<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FligthController extends Controller
{
    public function index()
    {
        return view('flights',["name"=> "Flights"]);
    }

    public function save(Request $request){
        
    }
}
