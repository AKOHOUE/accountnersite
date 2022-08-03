<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Contact;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    
    public function index()
    {
        return view('back.auth.login');
    }  
    public function adminConnexion()
    {
        return view('back.auth.login');
    }  
      
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Connecté');
        }
  
        return redirect("adminConnexion")->withSuccess('Les informations de connexion ne sont pas valides .');
    }
    
    public function registrationAdmin()
    {
        return view('back.auth.registration');
    }

      
    public function adminRegistration(Request $request)
    {  
        request()->validate([
            'isActif' => 'string',
            'isAdmin' => 'string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);


        $user = new User;
        $user->email = $request->email;
      
        $user->password = bcrypt($request->password);
      
        $user->isAdmin = "1";
        $user->isActif = "1";
    
        $user->save();
        
         
        return redirect("adminConnexion")->withSuccess('Compte créé avec succès !');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function listContacts()
    {

        if(Auth::check()){
            $contacts = Contact::all();

            return view('back.contacts', compact('contacts'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }
    public function dashboard()
    {
        if(Auth::check()){
            $clients = User::all()->where('isAdmin', 0);
            return view('back.dashboard', compact('clients'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }
 
    public function clients()
    {
        if(Auth::check()){
            $clients = User::all()->where('isAdmin', 0);
            return view('back.clientsList', compact('clients'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }
    public function clientsActifs()
    {
        if(Auth::check()){
            $clientsActifs = User::all()->where('isAdmin', 0)->where('isActif', 1);
            return view('back.clientsActifs', compact('clientsActifs'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }

    public function clientsInactifs()
    {
        if(Auth::check()){
            $clientsInactifs = User::all()->where('isAdmin', 0)->where('isActif', 0);
            return view('back.clientsInactifs', compact('clientsInactifs'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }

    public function profileAdmin()
    {
        if(Auth::check()){
            return view('back.profileAdmin');
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }
    public function contacts()
    {
        if(Auth::check()){
            $contacts = Contact::latest();
            return view('back.contacts');
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }
   
    public function adminlogout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('adminConnexion');
    }

    public function editClient($id)
    {
        $user = User::findOrFail($id);

    	return view('back.editerClient', compact('user'));
    }
     
    public function depotsClient($id)
    {
        $user = User::findOrFail($id);

    	return view('back.depotretrait', compact('user'));
    }
    public function detailClient($id)
    {
        $user = User::findOrFail($id);

    	return view('back.detailClient', compact('user'));
    }

 
    public function modificationClient($id)
    {
       $user = User::findOrFail($id);
       $users = new User;
     
    	$user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->phone = request('phone');
        $user->email = request('email');

       
        $user->charge = request('charge');
        $user->birthday = request('birthday');
        $user->genre = request('genre');
        $user->single = request('single');
        $user->others = request('others');
        $user->country = request('country');
        $user->city = request('city');
        $user->adresse = request('adresse');
 
      
        $user->profession = request('profession');
        $user->swift = request('swift');
        $user->bic = request('bic');
        $user->compteSolde = request('compteSolde');
        $user->solde = request('solde');
        $user->country = request('country');
        $user->city = request('city');
        $user->adresse = request('adresse');



        $user->workCompagny = request('workCompagny');
        $user->typePiece = request('typePiece');
        $user->devise = request('devise');
        $user->typeAccounte = request('typeAccounte');

       // $user->password = bcrypt(request('password'));
    	$user->save();

    	return redirect()->route('back.clients');
    }
    
    public function activerVClient($id)
    {
        $user = User::findOrFail($id);

    	return view('back.activation', compact('user'));
    }

    public function desactiverVClient($id)
    {
        $user = User::findOrFail($id);

    	return view('back.desactivation', compact('user'));
    }



    public function passwordVueClient($id)
    {
        $user = User::findOrFail($id);

    	return view('back.passwordVueClient', compact('user'));
    }


    public function activerClient($id)
    {
       $user = User::findOrFail($id);
       $users = new User;

       $user->username = request('username');
       $user->isActif = "1";

       // $user->password = bcrypt(request('password'));
    	$user->save();

    	return redirect()->route('back.clients');
    }

    public function depotClient($id)
    {
       $user = User::findOrFail($id);
       $users = new User;
       
       $user->username = request('username');
       $user->solde = request('solde');

    	$user->save();

    	return redirect()->route('back.clients');
    }
    public function passwordClient($id)
    {
       $user = User::findOrFail($id);
       $users = new User;
       
       $user->username = request('username');
       $user->isActif = "1";
       $user->password = bcrypt(request('password'));
    	
       $user->save();

    	return redirect()->route('back.clients');
    }

    public function desactiverClient($id)
    {
       $user = User::findOrFail($id);
      

    	$user->username = request('username');
        $user->isActif = "0";

       // $user->password = bcrypt(request('password'));
    	$user->save();

    	return redirect()->route('back.clients');
    }
    public function me()
    {
             $user = auth()->user();
            if ($user) {
                $user->email = request('email');
                $user->isActif = "1";
                $user->username = request('username');
                $user->password = bcrypt(request('password'));
                $user->save();
                $this->adminlogout();
            } else {
                return redirect()->route('adminConnexion');
            }
      
    }
     
    public function deleteClient($id)
    {
    	$user = User::findOrFail($id);
    	$user->delete();

    	return redirect()->route('back.clients');
    }

    public function depotsClients()
    {
        if(Auth::check()){
            $opsClient = Operation::all()->where('typeOperation',"DEPOT");
            return view('back.depoVirement', compact('opsClient'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }
    public function virementsClients()
    {
        if(Auth::check()){
            $opsClient = Operation::all()->where('typeOperation',"TRANSFERT");
            return view('back.virementsClients', compact('opsClient'));
        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }

    public function operationsClients()
    {
        if(Auth::check()){
 
            $opsClient = Operation::latest()->paginate(5);
    
            return view('back.listOperations', compact('opsClient'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

        }
  
        return redirect("adminConnexion")->withSuccess("Vous n'êtes pas autorisé à accéder.");
    }


    
    public function deleteOps($id)
    {
 
        if(auth()->guest()){
            return redirect()->route('adminConnexion');
        }
    	$opsClient = Operation::findOrFail($id);
    	$opsClient->delete();

    	return redirect()->route('back.suiviOps');
    }

    public function suiviOps()
    {
        if(Auth::check()){
            $opsClient = Operation::latest()->get();
            return view('back.listOperations', compact('opsClient'));
        }
  
        return redirect("adminConnexion")->with("Vous n'êtes pas autorisé à accéder.");
    }
    public function opt($id)
    {
        $ops = Operation::findOrFail($id);

        if(auth()->guest()){
            return redirect("adminConnexion")->with("Vous n'êtes pas autorisé à accéder.");
        }
   
        return view('back.modificationOps', compact('ops'));
    }
    
    public function opsUpdate($id)
    {
        if(auth()->guest()){
            return redirect("adminConnexion")->with("Vous n'êtes pas autorisé à accéder.");
        }
        $opsClient = Operation::findOrFail($id);
        
       $opsClient->montant = request('montant');
       $opsClient->montantVire = request('montantVire');
       $opsClient->montantDepot = request('montantDepot');
       $opsClient->raison = request('raison');

       $opsClient->receveur = request('receveur');
       $opsClient->support = request('support');

       $opsClient->temoinsMail1 = request('temoinsMail1');
       $opsClient->temoinsPhone1 = request('temoinsPhone1');
       $opsClient->percentage = request('percentage');
 
    	$opsClient->save();

    	return redirect()->route('back.suiviOps');
    }

}