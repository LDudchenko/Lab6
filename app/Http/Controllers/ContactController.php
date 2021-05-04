<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
      $contact = new Contact();
      $contact->name=$req->input('name');
      $contact->email=$req->input('email');
      $contact->subject=$req->input('subject');
      $contact->comments=$req->input('comments');

      $contact->save();
      return redirect()->route('contacts')->with('success', "The message was sent.");
    }
}
