<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $data = [
            'programs' => Program::orderByDesc('id')->get(),
            'maccaHotels' => Hotel::where('city', 'macca')->get(),
            'medinaHotels' => Hotel::where('city', 'medina')->get(),
            "flights" => Flight::with('airline')->orderByDesc('id')->get(),
            "discounts" => Discount::orderByDesc('id')->get(),
            "name" => "Programs"
        ];
        return view('programs', $data);
    }

    public function save(Request $request){
        // dd($request->all());
        $request->validate([
            "flight" => 'required',
            "hotel_macca" => 'required',
            "hotel_medina" => 'required',
            "seats_count" => 'required'
        ]);

        Program::create([
            "flight_id" => $request->flight,
            "hotel_id_mecca" => $request->hotel_macca,
            "hotel_id_medina" => $request->hotel_medina,
            "seat_count" => $request->seats_count,
            "is_economic" => $request->is_economic === "on",
            "have_meals" => $request->have_meals === "on",
            "is_recommended" => $request->is_recommended === "on"
        ]);

        return redirect()->route('programs')->with('success', 'Flight created successfully');
    }

    public function edit(Program $program){
        $data = [
            'program' => $program,
            'programs' => Program::orderByDesc('id')->get(),
            'maccaHotels' => Hotel::where('city', 'macca')->get(),
            'medinaHotels' => Hotel::where('city', 'medina')->get(),
            "flights" => Flight::with('airline')->orderByDesc('id')->get(),
            "discounts" => Discount::orderByDesc('id')->get(),
            "name" => "Programs",
            "edit" => true
        ];
        return view('programs', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            "flight" => 'required',
            "hotel_macca" => 'required',
            "hotel_medina" => 'required',
            "seats_count" => 'required'
        ]);

        Program::where('id', $id)->update([
            "flight_id" => $request->flight,
            "hotel_id_mecca" => $request->hotel_macca,
            "hotel_id_medina" => $request->hotel_medina,
            "seat_count" => $request->seats_count,
            "is_economic" => $request->is_economic === "on",
            "have_meals" => $request->have_meals === "on",
            "is_recommended" => $request->is_recommended === "on"
        ]);

        return redirect()->route('programs')->with('success', 'Flight updated successfully');
    }

    public function delete($id){
        Program::where('id', $id)->delete();
        return redirect()->route('programs')->with('success', 'Flight deleted successfully');
    }
}
