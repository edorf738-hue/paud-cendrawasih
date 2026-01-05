<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $admin = Admin::first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['password' => 'Password salah']);
        }

        session(['admin_logged_in' => true]);

        return redirect()->route('admin.dashboard');
    }
}
