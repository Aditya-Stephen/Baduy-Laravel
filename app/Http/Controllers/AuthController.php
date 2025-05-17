<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menangani submit form login atau register
    public function handleAuthSubmit(Request $request)
    {
        // Jika ada field name, berarti registrasi
        if ($request->has('name')) {
            // Validasi input registrasi
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Membuat user baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Login setelah registrasi
            Auth::login($user);

            // Redirect ke homepage setelah registrasi
            return redirect()->route('homepage')->with('success', 'Registration successful!');
        } else {
            // Jika tidak ada name, berarti login
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('homepage')->with('success', 'Login successful!');
            }

            // Jika login gagal, kembali ke form login dengan error
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }
}