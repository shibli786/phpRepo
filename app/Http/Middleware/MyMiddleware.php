<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facade\Auth;

class MyMiddleware{


public function handle($request,Closure $next,$guard=null)
{

if(Auth::guard($guard)->guest()){

	return redirect()->guest()->('auth/login');
}
  return $next($request);

}