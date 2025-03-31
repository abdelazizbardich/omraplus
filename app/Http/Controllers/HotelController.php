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
                "name_en" => 'required',
                "name_ar" => 'required',
                "name_fr" => 'required',
                "address_en" => 'required',
                "address_ar" => 'required',
                "address_fr" => 'required',
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
                "name_en" => $request->name_en,
                "name_ar" => $request->name_ar,
                "name_fr" => $request->name_fr,
                "slug_en" => STR::slug($request->name_en),
                "slug_ar" => STR::slug($request->name_ar),
                "slug_fr" => STR::slug($request->name_fr),
                "address_en" => $request->address_en,
                "address_ar" => $request->address_ar,
                "address_fr" => $request->address_fr,
                "city" => $request->city,
                "distance" => $request->distance,
            ]);
    
            $primary_photo = $request->file('primary_photo')->store('hotels', ["disk"=> "public"]);
    
            Photo::create([
                "url" => $primary_photo,
                "type" => 'hotel',
                "post_id" => $hotel->id,
                "is_main" => true
            ]);
            foreach ($request->file('hotel_photos') as $photo) {
                $hotel_photos = $photo->store('hotels', ["disk"=> "public"]);
                Photo::create([
                    "url" => $hotel_photos,
                    "type" => 'hotel',
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
                "name_en" => 'required',
                "name_ar" => 'required',
                "name_fr" => 'required',
                "address_en" => 'required',
                "address_ar" => 'required',
                "address_fr" => 'required',
                "city" => 'required',
                "distance" => 'required'
            ]);
    
            // Validate file primary_photo and hotel_photos
            $request->validate([
                'primary_photo' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'hotel_photos.*' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
    
            // Save data to database
            $hotel->update([
                "name_en" => $request->name_en,
                "name_ar" => $request->name_ar,
                "name_fr" => $request->name_fr,
                "slug_en" => STR::slug($request->name_en),
                "slug_ar" => STR::slug($request->name_ar),
                "slug_fr" => STR::slug($request->name_fr),
                "address_en" => $request->address_en,
                "address_ar" => $request->address_ar,
                "address_fr" => $request->address_fr,
                "city" => $request->city,
                "address" => $request->address,
                "distance" => $request->distance,
            ]);

            $hotel->save();
    
            
            if($request->has('primary_photo')){
                $primary_photo = $request->file('primary_photo')->store('hotels', ["disk"=> "public"]);
                $photo = Photo::where('post_id', $hotel->id)->where('is_main', true)->first();
    
                if($photo){
                    $photo->update([
                        "url" => $primary_photo,
                        "type" => 'hotel',
                        "post_id" => $hotel->id,
                        "is_main" => true
                    ]);
                    $photo->save();
                }else{
                    Photo::create([
                        "url" => $primary_photo,
                        "type" => 'hotel',
                        "post_id" => $hotel->id,
                        "is_main" => true
                    ]);
                }
            }

            if($request->has('hotel_photos') && count($request->file('hotel_photos')) > 0){
                // delete all
                Photo::where('post_id', $hotel->id)->where('is_main', false)->delete();

                // save new ones
                foreach ($request->file('hotel_photos') as $photo) {
                    $hotel_photos = $photo->store('hotels', ["disk"=> "public"]);
                    Photo::create([
                        "url" => $hotel_photos,
                        "type" => 'hotel',
                        "post_id" => $hotel->id,
                        "is_main" => false
                    ]);
                }
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
