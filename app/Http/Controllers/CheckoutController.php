<?php

namespace App\Http\Controllers;

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

    public function checkout()
    {
        return view($this->devicePrefix.'pages.checkout');
    }
}
