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
}
