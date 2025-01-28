<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class CheckoutController extends Controller
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

    public function checkout(Flight $flight)
    {
        return view($this->devicePrefix.'pages.checkout');
    }
}
