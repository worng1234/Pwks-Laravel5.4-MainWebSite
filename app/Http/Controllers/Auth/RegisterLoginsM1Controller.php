<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterloginsM1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:registerlogin_m1', ['except' => ['logout']]);
    }

    public function showLogin(){
        return view('auth.form-check-login-m1');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('registerlogin_m1')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
           return redirect()->intended(route('RegisM1.dashboard'));
        }else {
            return view('auth.invalid-login.form-check-login-m1');
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
        
    }

    public function logout()
    {
        Auth::guard('registerlogin_m1')->logout();
        return redirect('/');
    }
}
