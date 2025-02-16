<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Category;
use App\Models\Flight;
use Illuminate\Http\Request;

class FligthController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Flights",
            "flights" => Flight::orderByDesc('id')->get(),
            "categories" => Category::orderByDesc('id')->get(),
            "airelines" => Airline::orderByDesc('id')->get(),
            "aitlines" => Airline::orderByDesc('id')->get()
        ];
        return view('flights',$data);
    }

    public function save(Request $request){
        
    }
}
