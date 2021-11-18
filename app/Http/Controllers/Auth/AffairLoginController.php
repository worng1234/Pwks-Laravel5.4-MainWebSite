<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AffairLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:affair', ['except' => ['logout']]);
    }

    public function showLogin(){
        return view('auth.affair-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('affair')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
           return redirect()->intended(route('affair.dashboard'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
        
    }

    public function logout()
    {
        Auth::guard('affair')->logout();
        return redirect('/');
    }
}
