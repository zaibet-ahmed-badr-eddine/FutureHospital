<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;


class RdvController extends Controller
{
    public function gestionRdv($id)
    {
        $rdvs = Rdv::all();
        $rdvt = Rdv::find($id);
        return view('nursepanel.gestionrdv', ['rdvs'=> $rdvs, 'rdvt'=> $rdvt]);

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
        $rdv->update();
        return redirect('/gestionrdv/1');


    }

}
