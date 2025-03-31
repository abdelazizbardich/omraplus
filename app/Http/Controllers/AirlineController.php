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
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255'
        ]);

        Airline::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr
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
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255'
        ]);

        $airline->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr
        ]);

        return redirect()->route('airlines')->with('success', 'Airline updated successfully');
    }
    public function delete(Airline $airline){
        $airline->delete();
        return redirect()->route('airlines')->with('success', 'Airline deleted successfully');
    }
}
