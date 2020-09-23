<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Rdv;
use App\User;
//use Auth;
use Illuminate\Support\Facades\Auth as Auth;




class PatientController extends Controller
{
    // 



  






    public function showPatient(){
        $patients=Patient::where('service_id','=',Auth::user()->service_id)->get();
        if(Auth::user()->role->role === 'chef_service'){
        return view("cheifpanel.consultepatient",["patients"=>$patients]);
        }
        if(Auth::user()->role->role === 'medcin'){
            return view("medpanel.cunsultrdv/1",["patients"=>$patients]);
        }    
        
        
    }

    public function dossierMed($id)
    {
        $patient = Patient::find($id);
        

        return view('cheifpanel.dossiermed', ["patient"=> $patient]);
    }

    public function acceptPatient($id){
        $patient = new patient();
        $rdv = Rdv::find($id);
        $rdv->confirmed_by_chief = 1;
        $rdv->update();

        $patient->id = $rdv->id;
        $patient->service_id = $rdv->service_id;
        $patient->name = $rdv->name;
        $patient->pseudoname = $rdv->pseudoname;
        $patient->email = $rdv->email;
        $patient->bornplace = $rdv->bornplace;
        $patient->birthday = $rdv->birthday;
        $patient->adress = $rdv->adress;
        $patient->gender = $rdv->gender;
        $patient->phonenumber = $rdv->phonenumber;
      
        $patient->save();
        
        
        $patients = Rdv::where('confirmed', '=', 1)->where('confirmed_by_chief','=', 0)->get();
        
        return view('cheifpanel.consultepatient', ["patients"=> $patients]);
    }

    public function refusePatient($id){
        $patient = Rdv::find($id);
        $patient->delete();
        $patients = Rdv::where('confirmed', '=', 1)->get();

        return view('cheifpanel.consultepatient', ["patients"=> $patients]);
    }

    public function storeRapport(Request $request, $id){
        $patient = Patient::find($id);
        $patient->rapport = $request->rapport;
        $patient->update();
        return redirect('/consultrdv/1');
    }

    
    public function deletepatient($id){
        $patient = Patient::find($id);
        $patient->delete();
        

        return redirect('/consulte-patient');
    }


    public function addpatient(Request $request){

        $patient=new Patient();
        $patient->service_id=Auth::user()->service_id;
        $patient->name=$request->name;
        $patient->pseudoname=$request->pseudoname;
        $patient->gender=$request->gender;
        $patient->email=$request->email;
        $patient->bornplace=$request->bornplace;
        $patient->birthday=$request->birthday;
        $patient->adress=$request->adress;
        $patient->phonenumber=$request->phonenumber;
        $patient->save();

        return redirect('/consulte-patient');







    }

    


}
