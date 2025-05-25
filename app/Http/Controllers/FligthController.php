<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Category;
use App\Models\Flight;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FligthController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Flights",
            "flights" => Flight::with('airline')->orderByDesc('id')->get(),
            "categories" => Category::orderByDesc('id')->get(),
            "airelines" => Airline::orderByDesc('id')->get(),
            "aitlines" => Airline::orderByDesc('id')->get()
        ];
        // dd($data);
        return view('flights', $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "title_en" => "required",
            "title_ar" => "required",
            "title_fr" => "required",
            "going_date" => "required",
            "return_date" => "required",
            "type" => "required",
            "category" => "required",
            "aireline" => "required"
        ]);

        // Validate file primary_photo and hotel_photos
        $request->validate([
            'primary_photo' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // 'fligth_photos.*' => 'mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        // Save data to database
        $flight = Flight::create([
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "title_fr" => $request->title_fr,
            "slug_en" => Str::slug($request->title_en),
            "slug_ar" => Str::slug($request->title_ar),
            "slug_fr" => Str::slug($request->title_fr),
            "going_date" => $request->going_date,
            "return_date" => $request->return_date,
            "type" => $request->type,
            "category_id" => $request->category,
            "airline_id" => $request->aireline,
            "is_recommended" => $request->is_recommended === "on",
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "description_fr" => $request->description_fr
        ]);

        $primary_photo = $request->file('primary_photo')->store('flights', ["disk" => "public"]);

        Photo::create([
            "url" => $primary_photo,
            "type" => 'flight',
            "post_id" => $flight->id,
            "is_main" => true
        ]);
        if ($request->hasFile('fligth_photos')) {
            $request->validate([
                'fligth_photos.*' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            ]);
            foreach ($request->file('fligth_photos') as $photo) {
                $fligth_photos = $photo->store('flights', ["disk" => "public"]);
                Photo::create([
                    "url" => $fligth_photos,
                    "type" => 'flight',
                    "post_id" => $flight->id,
                    "is_main" => false
                ]);
            }
        }
        return redirect()->route('flights')->with('success', 'Flight created successfully');
    }

    public function edit(Flight $flight)
    {
        $data = [
            "name" => "Flights",
            "flights" => Flight::with('airline')->orderByDesc('id')->get(),
            "categories" => Category::orderByDesc('id')->get(),
            "airelines" => Airline::orderByDesc('id')->get(),
            "flight" => $flight,
            "aitlines" => Airline::orderByDesc('id')->get(),
            "edit" => true
        ];
        return view('flights', $data);
    }

    public function update(Request $request, Flight $flight)
    {
        $request->validate([
            "title_en" => "required",
            "title_ar" => "required",
            "title_fr" => "required",
            "going_date" => "required",
            "return_date" => "required",
            "type" => "required",
            "category" => "required",
            "aireline" => "required",
        ]);

        
        // Save data to database
        $flight->update([
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "title_fr" => $request->title_fr,
            "slug_en" => STR::slug($request->title_en),
            "slug_ar" => STR::slug($request->title_ar),
            "slug_fr" => STR::slug($request->title_fr),
            "going_date" => $request->going_date,
            "return_date" => $request->return_date,
            "type" => $request->type,
            "category_id" => $request->category,
            "airline_id" => $request->aireline,
            "is_recommended" => $request->is_recommended === "on",
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "description_fr" => $request->description_fr
        ]);
        
        if($request->hasFile('primary_photo')){
            // Validate file primary_photo and hotel_photos
            $request->validate([
                'primary_photo' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
            $primary_photo = $request->file('primary_photo')->store('flights', ["disk" => "public"]);
            $old = Photo::where('post_id', $flight->id)->where("type" , 'flight')->where("is_main", true)->first();
            Photo::create([
                "url" => $primary_photo,
                "type" => 'flight',
                "post_id" => $flight->id,
                "is_main" => true
            ]);
            
            $old->delete();
        }

        if ($request->hasFile('fligth_photos')) {
            $request->validate([
                'fligth_photos.*' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            ]);
            $old = Photo::where('post_id', $flight->id)->where("type" , 'flight')->where("is_main", false)->delete();
            foreach ($request->file('fligth_photos') as $photo) {
                $fligth_photos = $photo->store('flights', ["disk" => "public"]);
                Photo::create([
                    "url" => $fligth_photos,
                    "type" => 'flight',
                    "post_id" => $flight->id,
                    "is_main" => false
                ]);
            }
        }
        return redirect()->route('flights')->with('success', 'Flight updated successfully');
    }


    public function delete(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights')->with('success', 'Flight deleted successfully');
    }
}
