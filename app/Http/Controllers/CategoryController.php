<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories',["name"=> "Flights Categories"]);
    }

    public function save(Request $request){

    }
}
