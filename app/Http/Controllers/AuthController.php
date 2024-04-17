<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect()->route('dashboard');
        }

        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard')->with('success', 'Login Berhasil!');
        }

        return back()->with('error', 'Email atau Password Salah.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }
}
