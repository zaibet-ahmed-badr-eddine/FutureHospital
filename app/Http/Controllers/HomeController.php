<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('cheifpanel.cheifpanelhome');
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

        return view('adminpanel.ajouterservice');

    }

    public function editpassword()
    {

        return view('adminpanel.editpassword');

    }
    public function editmyinfos()
    {

        return view('adminpanel.editmyinfos');

    }
    public function editcpassword()
    {

        return view('cheifpanel.editcpassword');

    }
    public function editcinfos()
    {

        return view('cheifpanel.editcinfos');

    }


    public function editmpassword()
    {

        return view('medpanel.editmpassword');

    }
    public function editminfos()
    {

        return view('medpanel.editminfos');

    }


    public function editnpassword()
    {

        return view('mnursepanel.editnpassword');

    }
    public function editninfos()
    {

        return view('nursepanel.editninfos');

    }
}
