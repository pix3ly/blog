<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller {
    public function get() {
        return view('authenticate');
    }

    public function post(Request $request) {
        // TODO VALIDATE

        $request->session()->put('password', $request->input('password'));

        return redirect()->route('index');
    }
}
