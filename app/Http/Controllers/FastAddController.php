<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FastAddController extends Controller
{
    
    public function index()
    {
        $data = [
            'name' => 'Fast add'
        ];
        return view('fast-add', $data);
    }
}
