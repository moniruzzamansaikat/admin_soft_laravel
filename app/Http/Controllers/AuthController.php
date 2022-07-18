<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // login with remember me
        if(! auth()->attempt($request->only(['email', 'password']), $request->has('remember'))){
            return back()->with('error', 'Invalid credentials');
        }
        
        return redirect()->back()->with('error', 'Wrong credentials');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('auth.login');
    }


}
