<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontUsersController extends Controller
{

    public function loginFrontPost()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($res){
            return redirect()->route('front.monCompte');
        }

        return back()->withInput()->withErrors([
            'email' => '']);
    }
    public function monCompte()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }

        return view('frontend.myAccounte');
    }
    public function logout()
    {
        auth()->logout();

        return redirect()->route('front.home');
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
                return redirect()->intended('myAccounte')
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
        request()->validate([
/****
 *             'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
 */
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:80048',
/***
 *             'solde' => 'string',
            'compteSolde' => 'string',
            'swift' => 'string',
            'bic' => 'string',
            'isActif' => 'string',
            'profession' => 'string',
            'adresse' => 'string',
            'country'=>'string',
            'city' => 'required',
            'others' => 'string',
            'single' => 'string',
            'genre' => 'string',
            'birthday' => 'string',
            'isAdmin' => 'string',
            'password' => 'required',
            'password_confirm' => 'required',
            'charge' => 'string',
            'workCompagny' => 'string',
 */
            'piece' => 'image|mimes:jpeg,png,jpg,gif,svg|max:80048',
         /****
          *    'typePiece' => 'string',
            'devise' => 'string',
            'typeAccounte' => 'string'
          */
        ]);

      /**
       *  if($request->hasFile('photo'))
      *  {
      *      $file = $request->file('photo');
      *      if($file->isValid()) {
       *         // $path = $file->store('public/images');
       *         $fileName   = time() . '_' . str_replace(' ','-',$file->getClientOriginalName());
       *         $path = "assets/photos/". str_replace(' ','',$fileName);
         *       move_uploaded_file($file->getRealPath(),$path);
         *    }
       * } 
        *  */ 
        if ($avatar=$request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "avatar." . $avatar->getClientOriginalExtension();
            $avatar->move($destinationPath, $profileImage);
            $input['photo'] = $profileImage;
        }
        if ($yourPiece=$request->file('piece')) {
            $destinationPath = 'image/';
            $piece = date('YmdHis') . "piece." . $yourPiece->getClientOriginalExtension();
            $yourPiece->move($destinationPath, $piece);
            $input['piece'] = $piece;
        }
       // $data['isAdmin'] = "0";
       // $data['photo'] = $profileImage;
      //  $data['piece'] = $piece;
    
        //$request->isAdmin="0";
       // $data = $request->all();


       $users = new User;

        $users->username = $request->username;
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        $users->email = $request->email;
        $users->phone = $request->phone;
        if ($profileImage) {
            $users->photo = $profileImage;
        }else{
            $users->photo = "NEANT";
        }
       
        $users->solde = $request->compteSolde;
        $users->compteSolde = $request->compteSolde;
        $users->password = bcrypt($request->password);
        $users->bic  = "RFGB".rand(1,10000)."BC";
        $users->swift = "RFGB".rand(1,155142)."SWT";
        $users->isAdmin = "0";
        $users->isActif = "0";
        $users->profession = $request->profession;
        $users->adresse = $request->adresse;
        $users->city = $request->city;
        $users->country=$request->country;
        $users->others = $request->others;
        $users->single = $request->single;
        $users->genre = $request->genre;
        $users->birthday = $request->birthday;
        $users->charge = $request->charge;


        $users->workCompagny = $request->workCompagny;
        $users->typePiece = $request->typePiece;
        if ($piece) {
            $users->piece = $piece;

        }else{
            $users->piece= "NEANT";
        }
        $users->devise = $request->devise;
        $users->typeAccounte = $request->typeAccounte;
        $users->save();
    //    $check = $this->create($data);
         
        return redirect("login")->withSuccess('Compte créé avec succès.');
    }


    public function createForm(array $data)
    {
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "avatar." . $image->getClientOriginalExtension();
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
