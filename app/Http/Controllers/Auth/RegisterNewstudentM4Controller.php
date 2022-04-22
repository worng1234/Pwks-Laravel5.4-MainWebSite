<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterNewstudentM4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:registerlogin_m4', ['except' => ['logout']]);
    }

    public function showLogin(){
        return view('auth.form-check-login-m4');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('registerlogin_m4')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
           return redirect()->intended(route('RegisM4.dashboard'));
        }else {
            return view('auth.invalid-login.form-check-login-m4');
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
        
    }

    public function logout()
    {
        Auth::guard('registerlogin_m4')->logout();
        return redirect('/');
    }
}
