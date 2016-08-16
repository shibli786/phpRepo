<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Log;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        Log::info($request->all());
          Log::info($guard);

        if (Auth::guard($guard)->guest()) {

            Log::info("user is guest");
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
            return redirect()->guest('auth/login');
            }
        }else
        {

            Log::info("user is logged in");
            Log::info($request);
            return $next($request);
        }
        
    }
}
