<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Program;
use App\Models\ProgramPrice;
use App\Models\Room;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        $hadjOffers = Flight::with(['category','photos','programs', 'programs.prices'])->where('type', 'hajj')->orderBy('id', 'desc')->get();
        $umrahOffers = Flight::with(['category','photos','programs', 'programs.prices'])->where('type', 'umrah')->orderBy('id', 'desc')->get();

        $data = [
            "hadjOffers" => $hadjOffers,
            "umrahOffers" => $umrahOffers
        ];
        return view('guest.welcome', $data);
    }

    public function flight(Flight $flight){
        $data = [
            'flight' => Flight::with(['airline','category','photos','programs', 'programs.prices', 'programs.hotelMecca', 'programs.hotelMedina','programs.discounts'])->where('id',$flight->id)->first(),
            'nexFligths' => Flight::with(['category','photos','programs', 'programs.prices'])->where('category_id', $flight->category_id)->orderBy('id', 'desc')->limit(4)->get()
        ];
        // map photos
        $data['flight']->photos = $data['flight']->photos->map(function($photo){
            return $photo->url;
        })->toArray();
        $flightPrice = 0;
        $flightOldPrice = 0;
        foreach ($data['flight']->programs as $index=>$program) {   
            foreach ($program->prices as $index=>$price) {
                if($flightPrice == 0){
                    $flightPrice = $price->price;
                    $flightOldPrice = $price->old_price;
                }else{
                    if($flightPrice > $price->price){
                        $flightPrice = $price->price;
                        $flightOldPrice = $price->old_price;
                    }
                }
            }
        }
        $data['flight']['price'] = $flightPrice;
        $data['flight']['old_price'] = $flightOldPrice;
        // dd($data);
        return view('guest.flight',$data);
    }

    public function faqs(){
        return view('guest.faqs');
    }

    public function aboutUs(){
        return view('guest.about-us');
    }

    public function contactUs(){
        return view('guest.contact-us');
    }

    public function checkout(Program $program, Request $request){
        $request->validate(['room_type' => 'required|exists:rooms,id']);
        $data = [
            'room' => Room::where('id',$request->room_type)->first(),
            'program' => $program,
            'price' => ProgramPrice::where('room_id',$request->room_type)->where('program_id',$program->id)->first(),
            "flight" => $program->load('flight')->flight
        ];
        return view('guest.checkout',$data);
    }

    public function confirmCheckout(Request $request){
        dd($request->all());
    }

    public function umrahGuide(){
        return view('guest.umrah-guide');
    }

}
