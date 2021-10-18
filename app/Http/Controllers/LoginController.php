<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request){
        $login = $request -> validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);


       if (!Auth::attempt($login)){
           return response(['message'=>'Invalid login credentials']);
       }

        $token = Auth::user()->createToken('authToken')->accessToken;

       return response(['user'=>Auth::user(),'token'=>$token]);
    }


}
