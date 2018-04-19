<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use resources\views\vendor\pagination;
class ContactController extends Controller
{

	
	   public function afficherFormulaire()
    {
    	
       return view('formulaire');
    }

       public function AjouterContact(Request $request)
    {
       $validator = Validator::make($request->all(), [
         'prenom' => 'required|alpha|max:255',
         'nom' => 'required|alpha|max:255',
         'email' => 'required|string|email|max:191|unique:contacts',
         'telephone' => 'string|nullable|min:8|max:30',
         'pays' => 'required|alpha',
         'adresse' => 'string|nullable|max:255',
         'ville' => 'alpha_num|nullable|max:255',
         'code_postal' => 'alpha_num|nullable|max:10',
         'sujet' => 'string|nullable|max:255',
         'message' => 'string|nullable|max:255',
         ]);
            
        if ($validator->fails()) {
            return redirect('form')
                        ->withErrors($validator)
                        ->withInput();
        }
            $id = DB::table('contacts')->insert([

             'prenom' => $request->input('prenom'),
             'nom' => $request->input('nom'),
             'email' => $request->input('email'),
             'telephone' => $request->input('telephone'),
             'pays' => $request->input('pays'),
             'adresse' => $request->input('adresse'),
             'ville' => $request->input('ville'),
             'code_postal' => $request->input('code_postal'),
             'sujet' => $request->input('sujet'),
             'message' => $request->input('message'),
            ]);

   /*    $data = ['nom' => $request->nom, 'prenom' => $request->prenom,'email' => $request->email,'telephone' => $request->telephone,'pays' => $request->pays,'adresse' => $request->adresse,'ville' => $request->ville,'code_postal' => $request->code_postal,'sujet' => $request->sujet,'message' => $request->message];*/
       return view('contact_ajout');
    }


/*	public function afficherContact()
    {
       
       $contacts = DB::table('contacts')->select('id','nom','prenom', 'sujet')->paginate(2);
  
      //dd($contacts);
       return view('liste_contact',['contacts' => $contacts]);
    }*/
    public function afficherContact(Request $request)
    {   
         $validator = Validator::make($request->all(), [
         'id_min' => 'required|alpha|max:255',
         'id_max' => 'required|alpha|max:255',
         'email' => 'string|email|max:191',
         
         ]);
         
       $query = DB::table('contacts')->select('id','nom','prenom', 'sujet');
     
       if ($request->has('id_min')) {
           $query=$query->where('id','>=',$request->input('id_min'));
          
       }
       if ($request->has('id_max')) {
       $query=$query->where('id','<=',$request->input('id_max'));
       
     }
      if ($request->has('emails')) {
       $query=$query->where('email','=',$request->input('emails'));
       
     }
        
         
         
       
       
        $contacts = $query->paginate(2);
     //  $query=$query->paginate(2);
     // dd($query);
       return view('liste_contact',['contacts' => $contacts,'id_min'=>$request->input('id_min'),'id_max'=>$request->input('id_max'),'emails'=>$request->input('emails')]);
    }
    public function afficherinfoContact($name)
    {
       $contacts = $user = DB::table('contacts')->where('nom', $name)->first();

      //dd($contacts);
       return view('info_contact',compact('contacts'));
    }
       public function deleteinfoContact($name)
    {
       $contacts =DB::table('contacts')->where('nom', '=', $name)->delete();

      //dd($contacts);
       return view('delete_contact');
    }
}