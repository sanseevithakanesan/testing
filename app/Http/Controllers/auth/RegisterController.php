<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
           'firstname' => 'required',
           'lastname'  => 'required',
           'Email'     => ['required','unique:clients'],
           'gender'    =>'required',
           'phone'     => 'required',
           'password'  => ['required',
                           'min:6',
                           'confirmed']

        ]);
        $clients = new clients;
        $clients -> first_name = $request -> input('firstname');
        $clients -> last_name = $request -> input('lastname');
        $clients -> Email = $request -> input('Email');
        $clients -> phoneNumber = $request -> input('phone');
        $clients -> gender = $request -> input('gender');
        $clients -> password = Hash::make($request -> input('password'));
        $clients -> save();
        Auth::login($clients);//
        return redirect('/home');

   }
}
