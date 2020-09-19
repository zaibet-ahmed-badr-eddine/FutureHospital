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
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
       return redirect('/bienvenue');

    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/mailbox');
    }


}
