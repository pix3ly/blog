<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Setting;
use App\User;

class SettingController extends Controller {
    public function get() {
        $password = Setting::get('password')->value;

        $administrators = User::where('role', '!=', 'regular')->get();

        return view('admin.settings', compact('password', 'administrators'));
    }

    public function post(Request $request) {
        // TODO VALIDATE

        Setting::set('password', $request->input('password'));

        return redirect()->route('admin.settings');
    }
}
