<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Discount;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\Program;
use App\Models\ProgramPrice;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Dashboard",
            "orders" => Order::count(),
            "pendingOrders" => Order::where("status", "pending")->count(),
            "flights" => Flight::count(),
            "hajj_flights" => Flight::where("type", "hajj")->count(),
            "omra_flights" => Flight::where("type", "omra")->count(),
            "programs" => Program::count(),
            "hotels" => Hotel::count(),
            "airlines" => Airline::count(),
            "prices" => ProgramPrice::count(),
            "discounts" => Discount::count(),
            "users" => User::count()
        ];
        return view('dashboard', $data);
    }

    public function profile()
    {
        return view('profile', ["name" => "Profile"]);
    }
    public function settings()
    {
        return view('settings', ["name" => "Settings"]);
    }
}
