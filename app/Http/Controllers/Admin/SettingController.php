<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Setting;
use App\User;

class SettingController extends Controller {
    public function get() {
        $security_type = Setting::get('security_type') ? Setting::get('security_type')->value : '';
        $security_password = Setting::get('security_password') ? Setting::get('security_password')->value : '';

        $administrators = User::where('role', '!=', 'regular')->get();

        return view('admin.settings', compact('security_type', 'security_password', 'administrators'));
    }

    public function post(Request $request) {
        // TODO VALIDATE

        Setting::set('security_type', $request->input('security_type'));
        Setting::set('security_password', $request->input('security_password'));

        return redirect()->route('admin.settings');
    }
}
