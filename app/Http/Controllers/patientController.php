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
}
