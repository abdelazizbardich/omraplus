<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        return view('discounts',["name"=> "Discounts"]);
    }

    public function save(Request $request){

    }
}
