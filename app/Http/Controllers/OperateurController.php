<?php

namespace App\Http\Controllers;

use App\Models\Operateur;
use Illuminate\Http\Request;

class OperateurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operateurs=Operateur::all();
        return view('operateurs/index',compact('operateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           //
           return view('operateurs/create');


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
            'prenom'=>'required',
            'nom'=>'required',
            'telephone'=>'required|min:6|unique:operateurs'
        ]);
      Operateur::create($request->all());
    //  dd($operateur);

        return redirect()->route('operateurs.index')->with('notice','Opérateur a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $operateurs= Operateur::find($id);
       return view('operateurs/show',compact('operateurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operateurs=Operateur::find($id);
        return view('operateurs/edit',compact('operateurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $operateurs=Operateur::find($id);
        $operateurs->update($request->all());
        return redirect()->route('operateurs.index')->with('notice','La modification a été éffectuée avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operateurs=Operateur::find($id);
        $operateurs->delete();
        return redirect()->route('operateurs.index')->with('notice','La suppression a été éffectuée avec succès');

    }
}
