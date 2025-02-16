<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index()
    {
        $data = [
            "name"=> "Airlines",
            "airelines" => Airline::orderByDesc('id')->get()
        ];
        return view('airlines',$data);
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        Airline::create([
            'name' => $request->name
        ]);

        return redirect()->route('airlines')->with('success', 'Airline created successfully');
    }

    public function edit(Airline $airline){
        $data = [
            "name"=> "Airlines",
            "airline" => $airline,
            "airelines" => Airline::orderByDesc('id')->get(),
            "edit" => true
        ];
        return view('airlines',$data);
    }
    public function update(Airline $airline, Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        $airline->update([
            'name' => $request->name
        ]);

        return redirect()->route('airlines')->with('success', 'Airline updated successfully');
    }
    public function delete(Airline $airline){
        $airline->delete();
        return redirect()->route('airlines')->with('success', 'Airline deleted successfully');
    }
}
