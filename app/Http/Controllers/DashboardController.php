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
            "users" => User::count(),
            "lastOrders" => Order::with(["user"])->orderByDesc('id')->limit(10)->get(),
            "ordersByMonths" => Order::selectRaw('count(*) as count, MONTH(created_at) as month')
                ->groupByRaw('MONTH(created_at)')
                ->orderByRaw('MONTH(created_at)')
                ->get()->toArray()
        ];
        $months = [__("index.jan"), __("index.feb"), __("index.mar"), __("index.apr"), __("index.may"), __("index.jun"), __("index.jul"), __("index.aug"), __("index.sep"), __("index.oct"), __("index.nov"), __("index.dec")];
        $monthsData = array_fill_keys($months, 0);
        foreach ($data["ordersByMonths"] as $order) {
            $monthsData[$months[$order['month'] - 1]] = $order['count'];
        }
        $data["ordersByMonths"] = $monthsData;

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
