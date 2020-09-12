<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Service;
use App\Rdv;
use App\User;
use App\Patient;
use App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminpanelhome()
    {
        $medcin=count(User::where('role_id','=',3)->get());
        $infirmiere=count(User::where('role_id','=',4)->get());
        $chef=count(User::where('role_id','=',2)->get());
        $service=count(Service::all());
    
        return view('adminpanel.adminpanelhome')->with(['service'=>$service,'medcin'=>$medcin,'infirmiere'=>$infirmiere,'chef'=>$chef]);
    }

    public function cheifpanelhome()
    {

       $service_id=auth()->user()->service->id;
       $medcin=count(User::where('role_id','=',3,'AND','service_id','=',$service_id)->get());
       $infirmiere=count(User::where('role_id','=',4,'AND','service_id','=',$service_id)->get());
       $pa=count(Patient::all());
    
        $patients = Rdv::where('confirmed', '=', 1)->get();
        return view('cheifpanel.cheifpanelhome', ['patients'=> $patients,'medcin'=>$medcin,'infirmiere'=>$infirmiere,'pa'=>$pa]);
    }

    public function medpanelhome()
    {
        return view('medpanel.medpanelhome');
    }

    public function nursepanelhome()
    {
        return view('nursepanel.nursepanelhome');
    }

    public function calendar()
    {

        return view('adminpanel.calendar');

    }
    public function cheifcalendar()
    {

        return view('cheifpanel.calendarcheif');

    }
    public function medcalendar()
    {

        return view('medpanel.calendarmed');

    }

    public function nursecalendar()
    {

        return view('nursepanel.calendarnurse');

    }

    public function ajouterMembre()
    {

        return view('adminpanel.ajoutermembre');

    }
    public function cheifajouterMembre()
    {

        return view('cheifpanel.ajoutermembrecheif');

    }
    public function ajouterServices()
    {
        $chefs = User::where('role_id', '=', 2)->get();
        return view('adminpanel.ajouterservice', ["chefs"=> $chefs]);

    }

    public function editpassword()
    {

        return view('adminpanel.editpassword');

    }
    public function editmyinfos()
    {
        $user = Auth::user();

        if(Auth::user()->role->role === 'admin'){

            return view('adminpanel.editmyinfos', ['user'=> $user]);
            }
            
            if(Auth::user()->role->role === 'chef_service'){
             
                return view('cheifpanel.editmyinfos', ['user'=> $user]);
            }
            if(Auth::user()->role->role === 'medcin'){
                
                return view('medpanel.editmyinfos', ['user'=> $user]);
            }
            if(Auth::user()->role->role === 'infermiere'){
                return view('nursepanel.editmyinfos', ['user'=> $user]);
            }
        }



        

    
    public function editcpassword()
    {

        return view('cheifpanel.editcpassword');

    }



    public function editmpassword()
    {

        return view('medpanel.editmpassword');

    } 


    public function editnpassword()
    {

        return view('nursepanel.editnpassword');

    }
    public function rèdigerapport($id)
    {
        $patient = Patient::find($id);
        return view('medpanel.rapport', ['patient'=> $patient]);

    }

  
    
    public function consultservicea()
    {
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);
        return view('index', ['services'=> $services]);

    }

    public function mailbox()
    {
        $mails = Contact::all();
        return view('adminpanel.mailbox', ['mails'=> $mails]);

    }
    public function read($id)
    {
        $mail = Contact::find($id);
        return view('adminpanel.read', ['mail'=> $mail]);

    }

    

}
