<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan Anda memiliki file view auth/login.blade.php
    }

    /**
     * Menangani proses login.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Coba autentikasi
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika berhasil login, redirect ke dashboard
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }
    
        // Jika gagal login, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
        }
    }