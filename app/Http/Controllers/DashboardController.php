<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', ["name" => "Dashboard"]);
    }

    public function profile()
    {
        return view('dashboard', ["name" => "Dashboard"]);
    }
    public function settings()
    {
        return view('dashboard', ["name" => "Dashboard"]);
    }
}
