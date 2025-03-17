<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password];
        // dd($credentials);
       if( Auth::attempt($credentials)){
           $request->session()->regenerate();
              return redirect()->intended('/dashboard');
       }else{
              return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
              ]);
       }
    }
}