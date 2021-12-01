<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }   

    public function myAccount()
    {
        return view('auth.electronic.my_account');
    }

    public function loginRegister()
    {
        return view('auth.electronic.login_register');
    }

    public function postLoginUser(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('auth.login_user')->with('msgLogin', 'Email hoặc mật khẩu bị sai. Vui lòng đăng nhập lại!');
        }
    }

    public function postRegister(Request $request) 
    {
        $registerData = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
            'category_user_id' => 3,
            'active' => 0,
            'login_fail' => 0,
        ];
        $registerUser = $this->user->create($registerData);
        if ($registerUser) {
            return redirect()->route('auth.login_user')->with('msgRegister', 'Đăng ký thành công. Vui lòng đăng nhập!');
        } else {
            return redirect()->route('auth.login_user')->with('msgRegister', 'Lỗi. Vui lòng đăng ký lại!');
        }
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

    public function logout()
    {
        Auth::logout();

        return redirect()->route('electronic.index');    
    }
}
