<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view("register", [
            "title" => "Register"
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => "required|min:2|max:64",
            "age" => "required|integer|between:1,120",
            "occupation" => "required|min:2|max:64",
            "weight" => "required|numeric|between:2.5,99.99",
            "email" => "required|email|unique:users",
            "profile_img" => "required|mimes:jpg,jpeg,png|max:2048",
        ]);

        if ($request->file('profile_img')) {
            $validated['profile_img'] = '/storage/' . $request->file('profile_img')->store('profile_img');
        }

        User::create($validated);

        return redirect('/profile')->with('signupSuccess', "Registration success, please login to continue");
    }
}