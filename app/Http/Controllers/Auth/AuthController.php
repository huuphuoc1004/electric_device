<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{   
    public function myAccount()
    {
        return view('auth.my_account');
    }

    public function loginRegister()
    {
        return view('auth.login_register');
    }
}
