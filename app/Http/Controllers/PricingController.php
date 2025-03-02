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
            "prices" => Program::with(['flight', 'hotelMecca', 'hotelMedina', 'prices'])->orderBy('id', 'asc')->get()
        ];
        return view('pricing', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "program" => "required"
        ]);

        foreach ($request->room as $key => $room) {
            if($request->old_price[$key]){
                ProgramPrice::create([
                    "program_id" => $request->program,
                    "room_id" => $room,
                    "old_price" => $request->old_price[$key],
                    "price" => $request->price[$key]
                ]);
            }
        }

        return redirect()->route('pricing');
    }

    public function edit(ProgramPrice $programPrice)
    {
        $programPrice = Program::where('id', $programPrice->program_id)->with(['flight', 'hotelMecca', 'hotelMedina', 'prices'])->orderBy('id', 'desc')->first();
        $data = [
            "name" => "Pricing",
            "rooms" => Room::orderBy('id', 'desc')->get(),
            "programs" => Program::with(['flight', 'hotelMecca', 'hotelMedina'])->orderBy('id', 'desc')->get(),
            "prices" => Program::with(['flight', 'hotelMecca', 'hotelMedina', 'prices'])->orderBy('id', 'asc')->get(),
            "edit" => true,
            "price" => $programPrice
        ];
        return view('pricing', $data);
    }

    public function update(ProgramPrice $programPrice, Request $request)
    {
        $request->validate([
            "program" => "required"
        ]);
        foreach ($request->room as $key => $room) {
            $programPrice = ProgramPrice::where('program_id', $request->program)->where('room_id', $room)->first();
            if ($programPrice) {
                $programPrice->old_price = $request->old_price[$key];
                $programPrice->price = $request->price[$key];
                $programPrice->save();
            } else {
                if($request->old_price[$key]){
                    ProgramPrice::create([
                        "program_id" => $request->program,
                        "room_id" => $room,
                        "old_price" => $request->old_price[$key],
                        "price" => $request->price[$key]
                    ]);
                }
            }
        }
        return redirect()->route('pricing');
    }

    public function delete(ProgramPrice $programPrice)
    {
        ProgramPrice::where('program_id', $programPrice->program_id)->delete();
        return redirect()->route('pricing');
    }
}
