<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('get.admin.beranda')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('get.login');
    }
}
