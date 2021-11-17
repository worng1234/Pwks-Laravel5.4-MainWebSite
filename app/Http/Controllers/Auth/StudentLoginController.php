<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:student');
    }

    public function showLogin(){
        return view('auth.student-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('student')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
           return redirect()->intended(route('student.dashboard'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
        
    }
}
