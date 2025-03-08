<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('log.register');
    }

    public function showLoginForm() {
        return view('log.login');
    }
}
