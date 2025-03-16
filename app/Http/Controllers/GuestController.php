<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Order;
use App\Models\Photo;
use App\Models\Program;
use App\Models\ProgramPrice;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        foreach ($data['flight']->programs as $program) {   
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
        $request->validate(['room' => 'required|exists:rooms,id']);
        $data = [
            'room' => Room::where('id',$request->room)->first(),
            'program' => $program,
            'price' => ProgramPrice::where('room_id',$request->room)->where('program_id',$program->id)->first(),
            "flight" => $program->load('flight')->flight
        ];
        return view('guest.checkout',$data);
    }

    public function confirmCheckout(Request $request){
        $request->validate([
            "flight_id" => 'required|numeric',
            "price_id" => 'required|numeric',
            "room_id" => 'required|numeric',
            "program_id" => 'required|numeric',
            "pilgrims_count" => 'required|numeric',
            "first_name" => 'required',
            "last_name" => 'required',
            "city" => 'required',
            "phone" => 'required',
            "email" => 'required',
            "payment_way" => 'required'
        ]);

        if($request->payment_way === "PAY_BY_CARD"){
            $request->validate([
                "card_number" => 'required',
                "expiry_date" => 'required',
                "cvc_code" => 'required'
            ]);
        }

        if(!User::where('email', $request->email)->exists()){
            // save the user
            $user = new User();
            $user->name = $request->first_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->city = $request->city;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make(rand(100000,999999));
            $user->save();

            $photo = new Photo();
            $photo->post_id = $user->id;
            $photo->type = "user";
            $file = getFakeAvatar($user->name);
            $photo->url = Storage::put('user/'.$file->name, $file->contents,['disk' => 'public']);
            $photo->save();
        }else{
            $user = User::where('email', $request->email)->first();
        }


        // save the order
        $order = new Order();
        $order->program_price_id = $request->price_id;
        $order->pilgrims_count = $request->pilgrims_count;
        $order->user_id = $user->id;
        $order->payment_method = $request->payment_way;
        $order->status = "pending";
        $order->payment_status = "pending";
        $order->pilgrims_count = $request->pilgrims_count;
        $order->total_price = $request->pilgrims_count * ProgramPrice::where('id',$request->price_id)->first()->price;
        $order->save();

        return redirect()->route('checkout.success', $order->id);
    }

    public function checkoutSuccess(Order $order){
        $data = [
            "name" => "Checkout Success",
            'order' => $order,
            'program' => Program::where('id',$order->programPrice->program_id)->first(),
            'price' => ProgramPrice::where('id',$order->program_price_id)->first(),
            "flight" => Program::where('id',$order->programPrice->program_id)->first()->load('flight')->flight
        ];
        return view('guest.checkout-success',$data);
    }

    public function umrahGuide(){
        return view('guest.umrah-guide');
    }


    // API

    public function apiGetFight(Flight $flight)
    {
        $flight = Flight::with(['airline','category','photos','programs', 'programs.prices', 'programs.hotelMecca', 'programs.hotelMedina','programs.discounts'])->where('id',$flight->id)->first();
        // map photos
        $flight["photos"] = $flight->photos->map(function($photo){
            return $photo->url;
        })->toArray();
        $flightPrice = 0;
        $flightOldPrice = 0;
        foreach ($flight->programs as $program) {   
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
        $flight['price'] = $flightPrice;
        $flight['old_price'] = $flightOldPrice;
        return response()->json($flight);
    }

}
