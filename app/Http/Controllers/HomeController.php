<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\Offer;

class HomeController extends Controller
{
    private $devicePrefix = null;

    public function __construct(Request $request)
    {
        if($request->device === 'mobile'){ 
            $this->devicePrefix = 'mobile.';
        }else{
            $this->devicePrefix = 'desktop.';
        }
    }

    public function index()
    {
        $umrahOffers = Flight::with(['flightGoing','flightReturn','flightPhotos','flightPrices'])->where('is_umrah',1)->get()->map(function($offer){
            $offer->price = $offer->flightPrices->min('price_five_to_eight_p');
            return $offer;
        }); 
        $hadjOffers = Flight::with(['flightGoing','flightReturn','flightPhotos','flightPrices'])->where('is_hadj',1)->get()->map(function($offer){
            $offer->price = $offer->flightPrices->min('price_five_to_eight_p');
            return $offer;
        }); 
        
        $data = [
            "hadjOffers" => $hadjOffers,
            "umrahOffers" => $umrahOffers
        ];
        return view($this->devicePrefix.'pages.home', $data);
    }
}
