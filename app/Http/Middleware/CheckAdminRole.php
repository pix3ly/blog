<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class CheckAdminRole {
    public function handle($request, Closure $next) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return $next($request);
            }

            return redirect()->route('index');
        }

        return redirect()->route('login');
    }
}
