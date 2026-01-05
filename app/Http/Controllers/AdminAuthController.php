<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        // Log untuk debug
        Log::info('Login attempt', [
            'password_received' => $request->password ? 'yes' : 'no',
            'ip' => $request->ip(),
        ]);

        // Validasi input
        $request->validate([
            'password' => 'required'
        ]);

        // Password dari env atau hardcoded
        $correctPassword = env('ADMIN_PASSWORD', 'admin123');

        Log::info('Password check', [
            'match' => $request->password === $correctPassword
        ]);

        if ($request->password === $correctPassword) {
            // Set session
            session([
                'admin_logged_in' => true,
                'login_time' => now(),
            ]);

            // Save session explicitly
            session()->save();

            Log::info('Login successful', [
                'session_id' => session()->getId(),
                'session_data' => session()->all()
            ]);

            return redirect()->route('admin.dashboard');
        }

        Log::warning('Login failed - wrong password');

        return back()->with('error', 'Password salah!')->withInput();
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        session()->save();
        
        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}