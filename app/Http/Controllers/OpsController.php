<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }elseif (auth()->user()->isAdmin="0" && auth()->user()->isActif="1") {

        $operations = Operation::latest()->paginate(5);

           return view('operations.index',compact('operations'))
           ->with('i', (request()->input('page', 1) - 1) * 5);
       }else{
        return redirect()->route('front.login');
       }
      
      
       
    }
    public function getLastOps() {
        $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
        return $operation[0];
    }

    public function getLastTransfert() {
        $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
        return $operation[0];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function depot()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        return view('frontend.depot');
    }
    public function transfert()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        return view('frontend.transfert');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        $request->validate([
            'typeOperation' => 'required',
            'montant' => 'required',
            'montantVire' => 'string',
            'montantDepot' => 'string',
            'raison' => 'required',
            'receveur' => 'required',
            'support' => 'required',
            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
            'pending' => 'string',
            'salary' => 'string',
            'compagny' => 'string',
            'temois' => 'string',
            'temoinsMail1' => 'string',
            'temoinsPhone1' => 'string',
            'percentage' => 'string'
        ]);

        Operation::create($request->all());
       
        return redirect()->route('operations.index')
                        ->with('success','Opération effectuée  avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function show(Operation $operation)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        return view('operations.show',compact('operation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function edit(Operation $operation)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        return view('operations.show',compact('operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operation $operation)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        $request->validate([
            'typeOperation' => 'required',
            'montant' => 'required',
            'montantVire' => 'required',
            'montantDepot' => 'required',
            'raison' => 'required',
            'receveur' => 'required',
            'support' => 'required',
            'code1' => 'string',
            'code2' => 'required',
            'code3' => 'required',
            'pending' => 'required',
            'salary' => 'string',
            'compagny' => 'string',
            'temois' => 'required',
            'temoinsMail1' => 'required',
            'temoinsPhone1' => 'required',
            'percentage' => 'string'
        ]);
      
        $aide->update($request->all());
      
        return redirect()->route('operationss.index')
                        ->with('success','Opération effectuée  avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operation $operation)
    { 
         $operation->delete();
     
        return redirect()->route('operations.index')
                        ->with('success','Suppression éffectée avec succès.');
    }

    
    public function demandeOpsDepot(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'typeOperation' => 'string',
            'montant' => 'string',
            'montantVire' => 'string',
            'montantDepot' => 'string',
            'raison' => 'string',
            'receveur' => 'string',
            'support' => 'string',
            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
            'pending' => 'string',
            'salary' => 'string',
            'compagny' => 'string',
            'temois' => 'string',
            'temoinsMail1' => 'string',
            'temoinsPhone1' => 'string',
            'percentage' => 'number'
        ]);



        $operation = new Operation;
        $operation->typeOperation = "DEPOT";
        $operation->montant = $request->montant;
        $operation->montantVire = $request->montantVire;

        $operation->montantDepot = $request->montantDepot;
        $operation->raison = $request->raison;
        $operation->receveur = $request->receveur;
        $operation->support = $request->support;
        $operation->code1 = "RFGB".rand(1,10000)."C1";
        $operation->code2 = "RFGB".rand(1,10000)."C2";
        $operation->code3 = "RFGB".rand(1,10000)."C3";

        $operation->salary = $request->salary;
        $operation->compagny = $request->compagny;
        $operation->temois = $request->temois;

        $operation->temoinsMail1 = $request->temoinsMail1;
        $operation->temoinsPhone1 = $request->temoinsPhone1;
        $operation->percentage = 25;

        $user = auth()->user();

        $operation->author=$user->email;

        $operation->users_id=$user->id;

        $operation->pending = "EN COURS";

        $operation->save();
        
         
        return view('frontend.depotCode1',compact('operation'));
    }
    public function demandeOpsVirement(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'typeOperation' => 'string',
            'montant' => 'string',
            'montantVire' => 'string',
            'montantDepot' => 'string',
            'raison' => 'string',
            'receveur' => 'required',
            'support' => 'required',
            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
            'pending' => 'string',
            'salary' => 'string',
            'compagny' => 'string',
            'temois' => 'string',
            'temoinsMail1' => 'string',
            'temoinsPhone1' => 'string',
            'percentage' => 'number'
        ]);


        $operation = new Operation;
        $operation->typeOperation = "TRANSFERT";
        $operation->montant = $request->montant;
        $operation->montantVire = $request->montantVire;

        $operation->montantDepot = $request->montantDepot;
        $operation->raison = $request->raison;
        $operation->receveur = $request->receveur;
        $operation->support = $request->support;
        $operation->code1 = "RFGB".rand(1,10000)."C1";
        $operation->code2 = "RFGB".rand(1,10000)."C2";
        $operation->code3 = "RFGB".rand(1,10000)."C3";

        $operation->salary = $request->salary;
        $operation->compagny = $request->compagny;
        $operation->temois = $request->temois;

        $operation->temoinsMail1 = $request->temoinsMail1;
        $operation->temoinsPhone1 = $request->temoinsPhone1;
        $operation->percentage = 25;
        $user = auth()->user();

        $operation->author=$user->email;

        $operation->users_id=$user->id;
        $operation->pending = "EN COURS";

        $operation->save();
        
         
        return view('frontend.virementCode1',compact('operation'));
    }
    public function virementCode1(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'code' => 'string',

            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);
       // $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

 

     //   $operation = Operation::where('code1', request('code'));
      

    	//$codeValide = $request->code1;
        $operation = $this->getLastOps();

          
        if(request('code1')==$operation->code1){ 
 
            $operation->percentage = 50;

            $operation->save();

            return view('frontend.virementCode2',compact('operation'));

        }
 
        return view('frontend.virementCode1',compact('operation'));
    }

    public function virementCode2(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'code' => 'string',

            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);
       // $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

 

     //   $operation = Operation::where('code1', request('code'));
      

    	//$codeValide = $request->code1;
        $operation = $this->getLastOps();

          
        if(request('code2')==$operation->code2){ 
 
            $operation->percentage = 75;

            $operation->save();
            return view('frontend.virementCode3',compact('operation'));

        }
 
        return view('frontend.virementCode2',compact('operation'));
    }

    public function virementCode3(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'code' => 'string',

            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);
       // $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

 

     //   $operation = Operation::where('code1', request('code'));
      

    	//$codeValide = $request->code1;
        $operation = $this->getLastOps();

          
        if(request('code3')==$operation->code3){ 
 
 
            $operation->percentage = 85;

            $operation->pending = "TERMINE";


            $operation->save();

            return view('frontend.virementReview',compact('operation'));

        }
 
        return view('frontend.virementCode3',compact('operation'));
    }

    public function virementCode4(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
     
            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);

        $operation = Operation::where("code3", request('code3'));
      

    	$codeValide = request('code');

        if($codeValide==$operation->code3){ 
 
            $operation->percentage = 85;

            $operation->save();

            return view('frontend.virementCode3',compact('operation'));

        }
 
        return view('frontend.virementCode2',compact('operation'));
    }


    public function depotCode1(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'code' => 'string',

            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);
       // $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

 

     //   $operation = Operation::where('code1', request('code'));
      

    	//$codeValide = $request->code1;
        $operation = $this->getLastOps();

          
        if(request('code1')==$operation->code1){ 
 
            $operation->percentage = 50;

            $operation->save();

            return view('frontend.depotCode2',compact('operation'));

        }
 
        return view('frontend.depotCode1',compact('operation'));
    }

    public function depotCode2(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'code' => 'string',

            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);
       // $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

 

     //   $operation = Operation::where('code1', request('code'));
      

    	//$codeValide = $request->code1;
        $operation = $this->getLastOps();

          
        if(request('code2')==$operation->code2){ 
 
            $operation->percentage = 75;

            $operation->save();
            return view('frontend.depotCode3',compact('operation'));

        }
 
        return view('frontend.depotCode2',compact('operation'));
    }

    public function depotCode3(Request $request)
    {  
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'code' => 'string',

            'code1' => 'string',
            'code2' => 'string',
            'code3' => 'string',
 
            'percentage' => 'number'
        ]);
       // $operation = Operation::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

 

     //   $operation = Operation::where('code1', request('code'));
      

    	//$codeValide = $request->code1;
        $operation = $this->getLastOps();

          
        if(request('code3')==$operation->code3){ 
 
 
            $operation->percentage = 85;

            $operation->pending = "TERMINE";


            $operation->save();

            return view('frontend.depotReview',compact('operation'));

        }
 
        return view('frontend.depotCode3',compact('operation'));
    }

}
 