<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $contacts = Contact::all();

            return view('back.contacts', compact('contacts'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder."); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.contacts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'string',
            'email' => 'string',
            'object' => 'string',
            'message' => 'string',
        ]);


        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->object = $request->object;
        $contact->message =  $request->message;
      
       
        $contact->save();
        
         
        $succes = 'Votre message est envoyé avec succès, nous vous repondrons dans un bref délai !';

        return back()->withSuccess($succes);   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
 
        if(Auth::check()){

            return view('back.contactShow',compact('contact'));

         }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder."); 
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
     
        if(Auth::check()){
            $contact = Contact::findOrFail($id);

            return view('back.contactEdit', compact('contact'));
        }

        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder."); 
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {

         if(Auth::check()){
         
        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'object' => 'string',
            'message' => 'string',
        ]);
  
        $input = $request->all();
  
        $contact->update($input);
    
        return redirect()->route('contactsUi.index')
                        ->with('success','Modification effectué avec succès');

        }

        return redirect("adminConnexion")->with("Vous n'êtes pas autorisé à accéder."); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
      

            if(Auth::check()){
                  $contact->delete();
     
                return redirect()->route('contactsUi.index')
                                ->with('success','Suppression éffectée avec succès.');
            }
    
           // return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder."); 
         
    }
}
