<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;

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
        $chefs = User::where('role_id', '=', 2)->get();
        return view('adminpanel.editservice', ['service'=> $service, 'chefs'=> $chefs]);
    }
    
    // modify service
    public function modifyservice(Request $request, $id ){
        $service = Service::find($id);
        $service->name_s = $request->name_s;
        $service->chef_id = $request->chef_id;
        $service->lit_number = $request->lit_number;
        $service->update();
       
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);
    }

    // ajouter un service
    public function addservice(Request $request){
        $service = new Service();
        $service->name_s = $request->name_s;
        $service->chef_id = $request->chef_id;
        $service->lit_number = $request->lit_number;
        $service->save();
        $user=User::find($request->chef_id);
        $user->service_id=$service->id;
        $user->save();
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);
    }
}
