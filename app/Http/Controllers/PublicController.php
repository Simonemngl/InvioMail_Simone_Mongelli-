<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
  public function welcome () {

    return view('welcome');
  }

  public function contact_us(){

    return view('contact_us');
  }

  public function invio(Request $request){

    

    $email =$request->input('email');
    $name =$request->input('name');
    $message =$request->input('message');
    $subject =$request->input('subject');

    $user = compact('email','name','message','subject');

    Mail::to($email)->send(new ContactMail($user));
    Mail::to('AgricolaIrenzeq@gmiakdjfiuer')->send(new AdminMail($user));

    return redirect(route('welcome'))->with('message', 'Grazie per averci contattato');


  }
}
