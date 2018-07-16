<?php

namespace App\Http\Middleware;

use Closure;

use App\Setting;

class CheckPassword {
    public function handle($request, Closure $next) {
        $security_type = Setting::get('security_type');

        if ($security_type && $security_type->value == 'password') {
            $security_password = Setting::get('security_password');

            if ($security_password) {
                if (!$request->session()->exists('password') || $request->session()->get('password') != $security_password->value) {
                    return redirect()->route('authenticate');
                }
            }
        }

        return $next($request);
    }
}
