<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotelController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Hotels",
            "hotels" => Hotel::orderByDesc('id')->with('mainPhoto')->get()
        ];
        return view('hotels', $data);
    }

    public function save(Request $request){
        \DB::beginTransaction();
        try {
            // validate
            $request->validate([
                "name" => 'required',
                "address" => 'required',
                "city" => 'required',
                "distance" => 'required'
            ]);
    
            // Validate file primary_photo and hotel_photos
            $request->validate([
                'primary_photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'hotel_photos.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            // Save data to database
            $hotel = Hotel::create([
                "name" => $request->name,
                "slug" => STR::slug($request->name),
                "city" => $request->city,
                "address" => $request->address,
                "distance" => $request->distance,
            ]);
    
            $primary_photo = $request->file('primary_photo')->store('hotels', ["disk"=> "public"]);
    
            Photo::create([
                "url" => $primary_photo,
                "type" => $request->file('primary_photo')->getClientOriginalExtension(),
                "post_id" => $hotel->id,
                "is_main" => true
            ]);
            foreach ($request->file('hotel_photos') as $photo) {
                $hotel_photos = $photo->store('hotels', ["disk"=> "public"]);
                Photo::create([
                    "url" => $hotel_photos,
                    "type" => $photo->getClientOriginalExtension(),
                    "post_id" => $hotel->id,
                    "is_main" => false
                ]);
            }
            \DB::commit();
            return redirect()->route('hotels')->with('success', 'Hotel created successfully');
        } catch (\Throwable $th) {
            \DB::rollback();
            dd($th);
            throw $th;
        }
    }

    public function edit(Hotel $hotel){
        $data = [
            "name" => "Edit Hotel",
            "hotel" => $hotel,
            "hotels" => Hotel::orderByDesc('id')->with('mainPhoto')->get(),
            "edit" => true
        ];
        return view('hotels', $data);
    }

    public function update(Request $request, Hotel $hotel){
        \DB::beginTransaction();
        try {
            // validate
            $request->validate([
                "name" => 'required',
                "address" => 'required',
                "city" => 'required',
                "distance" => 'required'
            ]);
    
            // Validate file primary_photo and hotel_photos
            $request->validate([
                'primary_photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'hotel_photos.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            // Save data to database
            $hotel = Hotel::create([
                "name" => $request->name,
                "slug" => STR::slug($request->name),
                "city" => $request->city,
                "address" => $request->address,
                "distance" => $request->distance,
            ]);
    
            $primary_photo = $request->file('primary_photo')->store('hotels', ["disk"=> "public"]);
    
            Photo::create([
                "url" => $primary_photo,
                "type" => $request->file('primary_photo')->getClientOriginalExtension(),
                "post_id" => $hotel->id,
                "is_main" => true
            ]);
            foreach ($request->file('hotel_photos') as $photo) {
                $hotel_photos = $photo->store('hotels', ["disk"=> "public"]);
                Photo::create([
                    "url" => $hotel_photos,
                    "type" => $photo->getClientOriginalExtension(),
                    "post_id" => $hotel->id,
                    "is_main" => false
                ]);
            }
            \DB::commit();
            return redirect()->route('hotels')->with('success', 'Hotel created successfully');
        } catch (\Throwable $th) {
            \DB::rollback();
            dd($th);
            throw $th;
        }
    }
    public function delete(Hotel $hotel){
        $hotel->delete();
        return redirect()->route('hotels');
    }
}
