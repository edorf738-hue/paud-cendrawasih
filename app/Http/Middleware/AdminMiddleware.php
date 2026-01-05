<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('AdminAuth middleware check', [
            'session_id' => session()->getId(),
            'admin_logged_in' => session('admin_logged_in'),
            'all_session' => session()->all()
        ]);

        if (!session('admin_logged_in')) {
            Log::warning('Access denied - not logged in');
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }

        return $next($request);
    }
}