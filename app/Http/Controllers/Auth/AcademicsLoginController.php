<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AcademicsLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:academic');
    }

    public function showLogin(){
        return view('auth.academic-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('academic')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
           return redirect()->intended(route('academic.dashboard'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
        
    }
}
