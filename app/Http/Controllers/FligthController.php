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
            "title" => "required",
            "going_date" => "required",
            "return_date" => "required",
            "type" => "required",
            "category" => "required",
            "aireline" => "required",
            "is_recommended" => "required",
            "description" => "required",
        ]);

        // Validate file primary_photo and hotel_photos
        $request->validate([
            'primary_photo' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // 'fligth_photos.*' => 'mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        // Save data to database
        $flight = Flight::create([
            "title" => $request->title,
            "slug" => STR::slug($request->title),
            "going_date" => $request->going_date,
            "return_date" => $request->return_date,
            "type" => $request->type,
            "category_id" => $request->category,
            "airline_id" => $request->aireline,
            "is_recommended" => $request->is_recommended === "on",
            "description" => $request->description
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


    public function delete(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights')->with('success', 'Flight deleted successfully');
    }
}
