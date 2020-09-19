<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\User;

class RdvController extends Controller
{
    public function gestionRdv($id)
    {
        $rdvs = Rdv::where('confirmed', '=', 0)->get();
        $rdvt = Rdv::find($id);
        $meds = User::where('role_id', '=', 3)->get();
        return view('nursepanel.gestionrdv', ['rdvs'=> $rdvs, 'rdvt'=> $rdvt, "meds"=> $meds]);

    }
    public function consultRdv($id)
    {
        $rdvs = Rdv::all();
        $rdvt = Rdv::find($id);
   
   


        return view('medpanel.consulteRdv', ['rdvs'=> $rdvs, 'rdvt'=> $rdvt ]);

    }
    public function addMed(Request $request,$id){
        $rdv = Rdv::find($id);
        $rdv->medcin=$request->medcin;
        $rdv->rdv_date=$request->rdv_date;
        $rdv->confirmed = 1;
        $rdv->update();
        return redirect('/gestionrdv/1');


    }
    public function addRdv(Request $request){
        
        $rdv = new Rdv();
        $rdv->name = $request->name;
        $rdv->pseudoname = $request->pseudoname;
        $rdv->gender = $request->gender;
        $rdv->email = $request->email;
        $rdv->phonenumber = $request->phonenumber;
        $rdv->birthday = $request->birthday;
        $rdv->bornplace = $request->bornplace;
        $rdv->adress = $request->address;
        // $rdv->service = $request->service;
        $rdv->save();

            //return redirect('/bienvenue');
            return view('index');
       

      
               
        }

}
