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
        // Validate the request...
        $request->validate([
            'name' => 'required|max:255'
        ]);

        Room::create([
            'name' => $request->name
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
    public function update(Room $room){
        dd($room);
    }
    public function delete(Room $room){
        $room->delete();
        return redirect()->route('rooms');
    }
}
