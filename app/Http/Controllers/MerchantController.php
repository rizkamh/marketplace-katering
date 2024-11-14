<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:merchants',
            'password' => 'required|min:6',
            'contact' => 'required'
        ]);

        $merchant = Merchant::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->contact,
            'description' => $request->description
        ]);

        return response()->json(['message' => 'Merchant registered successfully']);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $merchant = auth()->user();
            return response()->json(['message' => 'Login successful', 'merchant' => $merchant]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function addMenu(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $menu = auth()->user()->menus()->create($request->all());

        return response()->json(['message' => 'Menu added successfully', 'menu' => $menu]);
    }
}
