<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{

    public function show(){
        $contacts = Contact::all();
        return redirect('/');
    }

    public function store(Request $request){
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->sexe = $request->sexe;
        $contact->email = $request->email;
        $contact->phonenumber = $request->phonenumber;
        $contact->date = $request->date;
        $contact->bornplace = $request->bornplace;
        $contact->adress = $request->adress;
        $contact->type = $request->type;
        $contact->save();
        return redirect('/');
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
    }


}
