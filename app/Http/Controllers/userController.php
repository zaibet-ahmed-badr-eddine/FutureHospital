<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\user;
use Auth;

class userController extends Controller
{
    

    // add a new member
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


    // show users depending on their roles
    public function showMembers($id){
      
        $users = User::where('role_id', '=', $id)->get();
        if(Auth::user()->role->role === 'admin'){
        return view('adminpanel.consulteUser', ['users'=> $users, "role_id"=>$id]);}
        if(Auth::user()->role->role === 'chef_service'){
           
            return view('cheifpanel.consulteuserc', ['users'=> $users, "role_id"=>$id]);
        }

    }

    // delte user 
    public function deleteMember($id, $role_id){

       
        $user = User::find($id);
        $user->delete();
        $users = User::where('role_id', '=', $role_id)->get();
        if(Auth::user()->role->role === 'admin'){
        return view('adminpanel.consulteUser', ['users'=> $users, "role_id"=>$role_id]);
        }
        if(Auth::user()->role->role === 'chef_service'){
    
        return view('cheifpanel.consulteuserc', ['users'=> $users, "role_id"=>$role_id]);
        }
    }

    // show modify form
    public function editMember($id){
        
        $user = User::find($id);
        if(Auth::user()->role->role === 'admin'){
        return view('adminpanel.editcheifa', ['user'=> $user]);
    }
        if(Auth::user()->role->role === 'chef_service'){
        return view('cheifpanel.editmedc', ['user'=> $user]);
    }
        
    }

    // modify member informations
    public function updateMember(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->pseudoname = $request->pseudoname;
        $user->email = $request->email;
        $user->bornplace = $request->bornplace;
        $user->birthday = $request->birthday;
        $user->phonenumber = $request->phonenumber;
        $user->update();
       

        if(Auth::user()->role->role === 'admin'){
            return view('adminpanel.editcheifa', ['user'=> $user]);
        }
            if(Auth::user()->role->role === 'chef_service'){
            return view('cheifpanel.editmedc', ['user'=> $user]);
        }
    }

    // modifier les info function
    public function modifyOwnInfo(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->pseudoname = $request->pseudoname;
        $user->email = $request->email;
        $user->bornplace = $request->bornplace;
        $user->birthday = $request->birthday;
        $user->phonenumber = $request->phonenumber;
        $user->update();
        
        if(Auth::user()->role->role === 'admin'){
        return view('adminpanel.editmyinfos', ['user'=> $user]);
        }
        if(Auth::user()->role->role === 'chef_service'){
            return view('cheifpanel.editcinfos', ['user'=> $user]);
        }
        if(Auth::user()->role->role === 'medcin'){
            return view('medpanel.editminfos', ['user'=> $user]);
        }
        if(Auth::user()->role->role === 'infirmiere'){
            return view('nursepanel.editninfos', ['user'=> $user]);
        }
    }

    // change own password
    public function modifypassword(Request $request){
        $user = User::find(Auth::user()->id);
        if(Hash::check($request->oldpassword, $user->password)){
            $user->password = bcrypt($request->password);
            $user->update();
        }

       

        if(Auth::user()->role->role === 'admin'){
            return view('adminpanel.adminpanelhome');
            }
            if(Auth::user()->role->role === 'chef_service'){
                return view('cheifpanel.cheifpanelhome');
            }
            if(Auth::user()->role->role === 'medcin'){
                return view('medpanel.medpanelhome');
            }
            if(Auth::user()->role->role === 'infirmiere'){
                return view('nursepanel.nursepanelhome');
            }
    }

}
