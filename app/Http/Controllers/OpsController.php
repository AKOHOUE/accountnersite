<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = Operation::latest()->paginate(5);
      
        return view('operations.index',compact('operations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        Product::create($request->all());
       
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


}
 