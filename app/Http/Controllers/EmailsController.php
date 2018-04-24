<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Validator;
use Illuminate\Mail\Mailable;
use App\Mail\EmailInfoTest;
use DB;

use Mail;

class EmailsController extends Controller{
	 public function testEmailRaw(Request $request)

    {	
    	$d = date("H:i:s");
    	$texte = "Nous avons reçu votre demande à $d"; 
    	 Mail::raw($texte, function($message) {
		 $message->to('aminarais03@gmail.com');
		 $message->subject('demande reçu');
		});


    	 return "email envoyé avec la methode raw";

    	

    }
     public function testEmailClassique(Request $request)
    { 
    	Mail::send('hello', [], function ($message) {
		 $message->to('aminarais03@gmail.com');
		 $message->subject('amina');
		 });  	
      
    	
    	  return view('hello',compact('message'));

    }
     public function testEmailable(Request $request)
    {
    	$mailable = new EmailInfoTest('minouch', 'minaa');
        Mail::to('aminarais03@gmail.com')->send($mailable);
        return "email envoyé avec l'objet Mailable \n<br>";
    }
}