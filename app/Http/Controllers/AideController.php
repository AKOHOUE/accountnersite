<?php

namespace App\Http\Controllers;

use App\Models\Aide;
use Illuminate\Http\Request;

class AideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aides = Aide::latest()->paginate(5);
      
        return view('aides.index',compact('aides'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aides.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'piece' => 'required',
            'typePiece' => 'required',
            'montant' => 'string',
            'raison' => 'required',
            'profession' => 'required',
            'birthday'=> 'required',
            'others' => 'required'
        ]);
      
        Product::create($request->all());
       
        return redirect()->route('aides.index')
                        ->with('success','Opération effectuée  avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aide  $aide
     * @return \Illuminate\Http\Response
     */
    public function show(Aide $aide)
    {
        return view('aides.show',compact('aide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aide  $aide
     * @return \Illuminate\Http\Response
     */
    public function edit(Aide $aide)
    {
        return view('aides.show',compact('aide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aide  $aide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aide $aide)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'piece' => 'required',
            'typePiece' => 'required',
            'montant' => 'string',
            'raison' => 'required',
            'profession' => 'required',
            'birthday'=> 'required',
            'others' => 'required'
        ]);
        $aide->update($request->all());
      
        return redirect()->route('aides.index')
                        ->with('success','Opération effectuée  avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aide  $aide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aide $aide)
    {
        $blog->delete();
     
        return redirect()->route('aides.index')
                        ->with('success','Suppression éffectée avec succès.');
    }
}
 