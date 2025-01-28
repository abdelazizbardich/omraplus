<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class OfferController extends Controller
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
    
    
    public function index(Request $request, Flight $flight)
    {
        $data = [
            'flight' => $flight
        ];
        return view($this->devicePrefix.'pages.offer',$data);
    }
}
