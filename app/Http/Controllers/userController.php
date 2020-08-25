<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\user;
use Auth;

class userController extends Controller
{
    //

    
    public function addMember(Request $request){
        $user = new User();
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->pseudoname = $request->pseudoname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->bornplace = $request->bornplace;
        $user->birthday = $request->birthday;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        if(Auth::user()->role->role === 'admin'){
            return redirect('/addmembre');
        }

        if(Auth::user()->role->role === 'chef_service'){
                return redirect('/caddmembre');
        }
}
}
