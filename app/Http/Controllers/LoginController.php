<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('layout.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email' , 'password');
        if(Auth::attemps($credentials))
            {
                return redirect('/');

            }
        return back()-withError(
            [
                'email'=>'Email ou mot de passe incorrects'
            ]
        );


    }
     public function logout()
        {
            Auth::logout();
            return redirect('/login');
        }
}
