<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class LoginController extends Controller {
    public function index() {
        return view('login.index');
    }

    public function store(Request $request) {
        $email = $request->input('email');

        if ($user = User::where('email', $email)->first()) {
            $password = $request->input('password');

            if (Hash::check($password, $user->password)) {
                return redirect('/blogs/1');
            }

            return redirect('/login');
        }

        return redirect('/login');
    }
}
