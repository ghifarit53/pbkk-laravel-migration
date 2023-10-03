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
            "username" => "required|unique:users|min:2|max:16|alpha",
            "fullname" => "required|min:2|max:64",
            "email" => "required|email|unique:users",
            "profile_img" => "required|mimes:jpg,jpeg,png|max:2048",
        ]);

        if ($request->file('profile_img')) {
            $validated['profile_img'] = '/storage/' . $request->file('profile_img')->store('profile_img');
        }

        User::create($validated);

        return redirect('/profile/' . $validated['username']);
    }
}