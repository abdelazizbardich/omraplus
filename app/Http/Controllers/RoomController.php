<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $data = [
            "name"=> "Rooms",
            'rooms' => Room::orderByDesc('id')->get()
        ];
        return view('rooms',$data);
    }

    public function save(Request $request){
        // Validate the request... (name_en or name_ar or name_fr is required)
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
        ]);

        Room::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
        ]);
        return redirect()->route('rooms');
    }

    public function edit(Room $room){
        $data = [
            "name"=> "Edit Room",
            'rooms' => Room::orderByDesc('id')->get(),
            "room" => $room,
            "edit" => true
        ];
        return view('rooms',$data);
    }
    public function update(Room $room, Request $request){
        // Validate the request... (name_en or name_ar or name_fr is required)
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
        ]);

        $room->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
        ]);
        return redirect()->route('rooms');

    }

    
    public function delete(Room $room){
        $room->delete();
        return redirect()->route('rooms');
    }
}
