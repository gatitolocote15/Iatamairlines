<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

//heredado de Illuminate\Auth\Middleware\Authenticate $this->auth es auth
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->authenticate($request, $guards)) {
            return $next($request);
        }
        return redirect('login');
    }
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return '/login';
        }
    }
}
