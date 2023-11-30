<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        $auth = $request->only(['name', 'email', 'password']);

        User::create($auth);
        return view('register');
    }

    public function login() {
        return view('login');
    }

    public function admin() {
        return view('admin');
    }
}
