<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogAdminPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            // Log the page view or save to database
            Log::info('Admin viewed page: ' . $request->path());
            return $next($request);
        }

        // If not an admin, redirect to a forbidden page or home
        return redirect('/forbidden')->with('error', 'You do not have access to this page.');
    }
}
