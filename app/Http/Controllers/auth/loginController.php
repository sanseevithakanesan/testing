<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use App\Models\clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function authenticate(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' =>'required'
        ]);

        $email    =  $request -> input('email');
        $password = $request -> input('password');
        if(Auth::attempt(['Email' => $email,'password' => $password])){
            $clients = clients::where('Email',$email)->first();
            Auth::login($clients);
            return redirect('/home');
        }else{
            return back()->withErrors(['invalid credentials']);
        }
    }
    public function logout()
    {
       Auth::logout();
       return redirect('/login');
    }

}
