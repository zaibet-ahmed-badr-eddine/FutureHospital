<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Service;
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
        if(Auth::user()->role->role === 'chef_service'){
            $user->service_id = Auth::user()->service_id;
    }
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
      
        if(Auth::user()->role->role === 'admin'){
            $users = User::where('role_id', '=', $id)->get();
            return view('adminpanel.consulteUser', ['users'=> $users, "role_id"=>$id]);
        }

        if(Auth::user()->role->role === 'chef_service'){
            $users = User::where('role_id', '=', $id)->where('service_id', "=", Auth::user()->service->id)->get();
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
        $services=Service::all();
        if(Auth::user()->role->role === 'admin'){
        return view('adminpanel.editcheifa', ['user'=> $user,'services'=>$services]);
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
        $user->service_id = $request->service_id;
        $user->update();

       

        $services=Service::all();
        if(Auth::user()->role->role === 'admin'){
            return view('adminpanel.editcheifa', ['user'=> $user,'services'=>$services]);
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
         
            return view('cheifpanel.editmyinfos', ['user'=> $user]);
        }
        if(Auth::user()->role->role === 'medcin'){
            
            return view('medpanel.editmyinfos', ['user'=> $user]);
        }
        if(Auth::user()->role->role === 'infirmiere'){
            return view('nursepanel.editmyinfos', ['user'=> $user]);
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



    public function uploadphoto(Request $request){
        $user = User::find(auth()->id());
        $attributes=request()->validate([
            'avatar'=>['image','mimes:png,jpg,jpeg,gif'],
        ]);
        if (request('avatar')){
            $attributes['avatar']=request('avatar')->store('avatars');
        }
        $user->update($attributes);    
       
   

        if(Auth::user()->role->role === 'admin'){
            
            return redirect("/admindashboard");

        }
        if(Auth::user()->role->role === 'chef_service'){
    
            return redirect("/cheifdashboard");
            
        }
        if(Auth::user()->role->role === 'medcin'){
     
            return redirect("/meddashboard");
        }
        if(Auth::user()->role->role === 'infirmiere'){
            return redirect("/nursedashboard");
        }
    }

}
