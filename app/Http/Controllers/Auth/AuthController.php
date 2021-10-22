<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{   
    public function myAccount()
    {
        return view('auth.electronic.my_account');
    }

    public function loginRegister()
    {
        return view('auth.electronic.login_register');
    }

    public function signInAdmin()
    {
        return view('auth.admin.sign_in');
    }

    public function signUpAdmin()
    {
        return view('auth.admin.sign_up');
    }

    public function forgotPassword()
    {
        return view('auth.admin.forgot_password');
    }
}
