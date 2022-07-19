<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'REGISTER'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'username'  => 'required|min:3|max:15|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:3|max:16'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);



        return redirect('/')->with('success', 'Registration successful! Please login');
    }
}
