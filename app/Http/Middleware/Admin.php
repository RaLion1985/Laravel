<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user= Auth::user();
        if ((bool)$user->is_Admin === false) {
            return redirect()->route('account')->with('error','У тебя нет доступа');
        }
        return $next($request);
    }
}
