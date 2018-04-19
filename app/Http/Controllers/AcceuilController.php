<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{

	   public function afficherAcceuil()
    {
    	 return "Bonjour";

    }

	   public function afficherFormulaire()
    {
    	$data= ['donnees'=>"Mes données"];
       return view('formulaire',$data);
    }

	   public function afficherConfirmation(Request $request)
    {
  
       $data=$request->all();
    	  return view('confirmation',$data);
    }
}