<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdmin="0") {
                return redirect()->intended('dashboard')
                ->withSuccess('Connexion avec succès !');
             
            } else {
                return redirect("login")->withSuccess('Identifiants incorerects, veuillez réessayer.');
            }
            
        }
  
        return redirect("login")->withSuccess('Identifiants incorerects, veuillez réessayer.');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'solde' => 'string',
            'compteSolde' => 'string',
            'swift' => 'required',
            'bic' => 'string',
            'isActif' => 'string',
            'profession' => 'string',
            'adresse' => 'string',
            'city' => 'required',
            'others' => 'string',
            'single' => 'string',
            'genre' => 'string',
            'birthday' => 'string',
            'isAdmin' => 'string',
            'password' => 'string',
            'password_confirm' => 'required',
            'charge' => 'string',
            'workCompagny' => 'string',
            'piece' => 'string',
            'typePiece' => 'string',
        ]);

        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }
        $data['isAdmin'] = "0";
        $data['photo'] = $profileImage;
        $request->isAdmin="0";
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Compte créé avec succès.');
    }


    public function createForm(array $data)
    {
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }
      return User::create([
        'username' => $data['username'],
        'firstname' => $data['firstname'],
        'lastname' => $data['lastname'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'photo' => $profileImage,
        'solde' => $data['solde'],
        'compteSolde' => $data['compteSolde'],
        'swift' => $data['swift'],
        'bic' => $data['bic'],
        'isActif' => $data['isActif'],
        'profession' => $data['profession'],
        'adresse' => $data['adresse'],
        'city' => $data['city'],
        'others' => $data['others'],
        'single' => $data['single'],
        'genre' => $data['genre'],
        'birthday' => $data['birthday'],
        'isAdmin' => '0',
        'charge' => $data['charge'],
        'workCompagny' => $data['workCompagny'],
        'piece' => $data['piece'],
        'typePiece' => $data['typePiece'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Pas autorisé à accéder à cette page.');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

}
