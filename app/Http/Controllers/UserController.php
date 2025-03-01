<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $date = [
            "name" => "Users",
            "users" => User::orderByDesc("id")->get()
        ];
        return view("users", $date);
    }
    public function save(Request $request){

    }
    public function edit(User $user){
        $date = [
            "name" => "Users",
            "user" => $user,
            "users" => User::orderByDesc("id")->get(),
            "edit" => true
        ];
        return view("users", $date);
    }
    public function update(User $user, Request $request){
    }
    public function delete(User $user){
        $user->delete();
        return redirect()->route('users');
    }
}
