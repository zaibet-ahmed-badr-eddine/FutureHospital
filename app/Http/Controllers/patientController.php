<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;


class patientController extends Controller
{
    //

    public function showMembers(){
      
        $patients = patient::all();
      
        return view('cheifpanel.consultepatient', ['patient'=> $patients]);}
        

    }






