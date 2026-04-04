<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatusUpdated;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function show(Order $order){
        $data = [
            'name' => 'Orders',
            'order' => $order->load('partner'),
        ];
        return view('show-order', $data);
    }
    public function edit(Order $order){
        $data = [
            'name' => 'Orders',
            'order' => $order->load('partner'),
        ];
        return view('edit-orders', $data);
    }
    public function update(Order $order, Request $request){
        $request->validate([
            'status'         => 'required|in:pending,approved,rejected',
            'payment_status' => 'required|in:pending,approved,rejected',
            'payment_method' => 'required|in:PAY_LATER,BANK_TRANSFER,PAY_BY_CARD,CASHPLUS',
        ]);

        // Detect which fields actually changed
        $watchedFields = ['status', 'payment_status', 'payment_method'];
        $changes = [];
        foreach ($watchedFields as $field) {
            $old = $order->$field;
            $new = $request->$field;
            if ($old !== $new) {
                $changes[$field] = ['from' => $old, 'to' => $new];
            }
        }

        $order->update([
            'status'         => $request->status,
            'payment_status' => $request->payment_status,
            'payment_method' => $request->payment_method,
        ]);

        if (!empty($changes)) {
            Mail::to($order->user->email, $order->user->name)
                ->send(new OrderStatusUpdated($order, $changes));
        }

        return redirect()->route('orders');
    }
    public function delete(Order $order){
        $order->delete();
        return redirect()->route('orders');
    }
}
