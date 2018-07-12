<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Setting;

class SettingController extends Controller {
    public function get() {
        $password = Setting::get('password')->value;

        return view('admin.settings', compact('password'));
    }

    public function post(Request $request) {
        // TODO VALIDATE

        Setting::set('password', $request->input('password'));

        return redirect()->route('admin.settings');
    }
}
