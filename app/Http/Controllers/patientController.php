<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

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
        $patient = patient::find($id);
        $patient->confirmed = 1;
        $patient->update();
        $patients = patient::where('confirmed', '=', 0)->get();
        return view('cheifpanel.cheifpanelhome', ["patients"=> $patients]);
    }

    public function refusePatient($id){
        $patient = patient::find($id);
        $patient->delete();
        return view('cheifpanel.cheifpanelhome', ["patients"=> $patients]);
    }


}
