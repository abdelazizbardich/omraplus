<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramPrice;
use App\Models\Room;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Pricing",
            "rooms" => Room::orderBy('id', 'desc')->get(),
            "programs" => Program::with(['flight', 'hotelMecca', 'hotelMedina'])->orderBy('id', 'desc')->get(),
            "prices" => ProgramPrice::with(['program', 'room'])->orderBy('id', 'desc')->get()
        ];
        return view('pricing',$data);
    }

    public function save(Request $request){
        $request->validate([
            "program" => "required",
            "room" => "required",
            "old_price" => "required",
            "price" => "required"
        ]);

        $pricing = ProgramPrice::create([
            "program_id" => $request->program,
            "room_id" => $request->room,
            "old_price" => $request->old_price,
            "price" => $request->price
        ]);

        return redirect()->route('pricing');
    }

    public function edit(ProgramPrice $programPrice)
    {
        $data = [
            "name" => "Pricing",
            "rooms" => Room::orderBy('id', 'desc')->get(),
            "programs" => Program::with(['flight', 'hotelMecca', 'hotelMedina'])->orderBy('id', 'desc')->get(),
            "prices" => ProgramPrice::with(['program', 'room'])->orderBy('id', 'desc')->get(),
            "edit" => true,
            "price" => $programPrice
        ];
        return view('pricing',$data);
    }

    public function update(ProgramPrice $programPrice, Request $request){
        $request->validate([
            "program" => "required",
            "room" => "required",
            "old_price" => "required",
            "price" => "required"
        ]);

        $programPrice->update([
            "program_id" => $request->program,
            "room_id" => $request->room,
            "old_price" => $request->old_price,
            "price" => $request->price
        ]);

        $programPrice->save();

        return redirect()->route('pricing');
    }

    public function delete(ProgramPrice $programPrice){
        $programPrice->delete();
        return redirect()->route('pricing');
    }
}
