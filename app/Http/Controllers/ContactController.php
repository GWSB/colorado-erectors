<?php

namespace App\Http\Controllers;

use App\Contact;

class ContactController extends Controller
{
    public function post() {
      //
    }
    public function index() {

      $contacts = Contact::all();

      return view('contact', compact('contacts'));
    }
    public function show($id) {

      $contact = Contact::find($id);

      return view('contact.show', compact('contact'));
    }
}
