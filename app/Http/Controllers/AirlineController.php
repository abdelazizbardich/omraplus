<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index()
    {
        return view('airlines',["name"=> "Airlines"]);
    }

    public function save(Request $request){

    }
}
