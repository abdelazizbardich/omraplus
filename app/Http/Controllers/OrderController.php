<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data = [
            'name' => 'Orders',
            'orders' => Order::orderByDesc('id')->get()
        ];
        return view('orders', $data);
    }
    public function create(){

    }
    public function save(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
