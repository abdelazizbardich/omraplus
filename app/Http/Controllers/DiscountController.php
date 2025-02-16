<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Program;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $data = [
            "discounts" => Discount::orderByDesc('id')->get(),
            "programs" => Program::orderByDesc('id')->get(),
            "name" => "Discounts"
        ];
        return view('discounts', $data);
    }

    public function save(Request $request)
    {
        // validate request
        $request->validate([
            "name" => "required",
            "code" => "required|unique:discounts,code",
            "type" => "required",
            "value" => "required"
        ]);

        // Save
        Discount::create([
            "name" => $request->name,
            "code" => $request->code,
            "type" => $request->type,
            "value" => $request->value
        ]);

        return redirect()->route('discounts');

    }

    public function edit(Discount $discount)
    {
        $data = [
            "discounts" => Discount::orderByDesc('id')->get(),
            "programs" => Program::orderByDesc('id')->get(),
            "discount" => $discount,
            "name" => "Discounts",
            "edit" => true
        ];
        return view('discounts', $data);
    }
    public function update(Discount $discount, Request $request)
    {
        // validate request
        $request->validate([
            "name" => "required",
            "code" => "required|unique:discounts,code",
            "type" => "required",
            "value" => "required"
        ]);

        // update
        $discount->update([
            "name" => $request->name,
            "code" => $request->code,
            "type" => $request->type,
            "value" => $request->value
        ]);

        return redirect()->route('discounts');
    }
    public function delete(Discount $discount)
    {
        $discount->delete();
        return redirect()->route('discounts');
    }
}
