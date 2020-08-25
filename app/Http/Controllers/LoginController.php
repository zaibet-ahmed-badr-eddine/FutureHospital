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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::user();
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

                if(Auth::user()->role->role === 'infirmiere'){
                    return redirect('/nursedashboard');
                }

                return Auth::logout();

            } else {
                return redirect()->back();
            }

        }

    }


       

}
