<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
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

    public function aboutUs()
    {
        return view($this->devicePrefix.'pages.about-us');
    }
    
    public function contactUs()
    {
        return view($this->devicePrefix.'pages.contact-us');
    }
    
    public function umrahGuide()
    {
        return view($this->devicePrefix.'pages.umrah-guide');
    }
}
