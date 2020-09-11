<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;

class LoginController extends Controller
{
    //login funtion
    public function login(Request $request)
    {

        $validation = $request->validate([
            'email'=> 'required',
            'password'=> 'required|min:8'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::check()) {
                if(Auth::user()->role->role === 'admin'){
                    return redirect('/admindashboard');
                }

                if(Auth::user()->role->role === 'chef_service'){
                    return redirect('/cheifdashboard');
                }


                if(Auth::user()->role->role === 'medcin'){
                    return redirect('/meddashboard');
                }

                if(Auth::user()->role->role === 'infermiere'){
                    return redirect('/nursedashboard');
                }

                Auth::logout();
                return view('auth.login', ["trouble", "your credetials are wrong"]);

            } else {
                return view('auth.login', ["trouble", "your credetials are wrong"]);
            }

        }else{
            return view('auth.login', ["trouble", "your credetials are wrong"]);
        }

    }


       

}
