<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Service;
use App\Rdv;
use App\User;
use App\patient;
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
        return view('adminpanel.adminpanelhome');
    }

    public function cheifpanelhome()
    {
        $patients = Rdv::where('confirmed', '=', 1)->get();
        return view('cheifpanel.cheifpanelhome', ['patients'=> $patients]);
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
    public function rèdigerapport()
    {

        return view('medpanel.rapport');

    }

  
    
    public function consultservicea()
    {
        $services = Service::all();
        return view('adminpanel.consulterservicea', ['services'=> $services]);

    }

    

}
