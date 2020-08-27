<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    // delete a service
    public function deleteService($id){
        $service = Service::find($id);
        $service->delete();
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);
    }


    // show edit form
    public function edit($id){
        $service = Service::find($id);
        return view('adminpanel.editservice', ['service'=> $service]);
    }
    
    // modify service
    public function modifyservice(Request $request, $id){
        $service = Service::find($id);
        $service->name_s = $request->name_s;
        $service->name_cs = $request->name_cs;
        $service->lit_number = $request->lit_number;
        $service->update();
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);
    }

    // ajouter un service
    public function addservice(Request $request, $id){
        $service = Service::find($id);
        $service->name_s = $request->name_s;
        $service->name_cs = $request->name_cs;
        $service->lit_number = $request->lit_number;
        $service->save();
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);
    }
}
