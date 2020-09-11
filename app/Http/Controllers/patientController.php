<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Rdv;


class PatientController extends Controller
{
    // 



  






    public function showPatient(){
        $patients=Patient::all();
        return view("cheifpanel.consultepatient",["patients"=>$patients]);
    }

    public function dossierMed($id)
    {
        $patient = Patient::find($id);
        return view('cheifpanel.dossiermed', ["patient"=> $patient]);
    }

    public function acceptPatient($id){
        $patient = new patient();
        $rdv = Rdv::find($id);
        $patient->name = $rdv->name;
        $patient->pseudoname = $rdv->pseudoname;
        $patient->email = $rdv->email;
        $patient->bornplace = $rdv->bornplace;
        $patient->birthday = $rdv->birthday;
        $patient->adress = $rdv->adress;
        $patient->gender = $rdv->gender;
        $patient->phonenumber = $rdv->phonenumber;
      
        $patient->save();
        $rdv->delete();
        $patients = Rdv::where('confirmed', '=', 1)->get();
        return view('cheifpanel.cheifpanelhome', ["patients"=> $patients]);
    }

    public function refusePatient($id){
        $patient = Rdv::find($id);
        $patient->delete();
        $patients = Rdv::where('confirmed', '=', 1)->get();

        return view('cheifpanel.cheifpanelhome', ["patients"=> $patients]);
    }


}
