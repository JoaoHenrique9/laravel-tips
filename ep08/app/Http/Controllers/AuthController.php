<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            //dd(Auth::user());
            return view('admin.dashboard');
        }
        else {
            return redirect()->route('admin.login');
        }
    }
    public function showLoginForm()
    {
        return view('admin.formLogin');
    }

    public function login( Request $request)
    {
       //var_dump($request->all());
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['E-mail informado não é valido']);
        }
        $credentials =[
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['os dados informados não conferem!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
}
