<?php

namespace App\Http\Middleware;

use Closure;

use App\Setting;

class CheckPassword {
    public function handle($request, Closure $next) {
        if ($password = Setting::get('password')) {
            if ($request->session()->get('password') != $password->value) {
                return redirect()->route('authenticate');
            }
        }

        return $next($request);
    }
}
