<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function register(Request $request) {
        return view('register');
    }

    public function login(Request $request) {
        return view('login');
    }
}
