<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class servicesController extends Controller
{
    //

    public function addService(Request $request){
        $service = new service();
        
        $service->name_s = $request->name_s;
        $service->name_cs = $request->name_cs;
        $service->lit_number = $request->lit_number;
       
        $service->save();
        return redirect('/addservice');
}
}