<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Operateur;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $machines= Machine::all();
       return view('machines/index',compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operateurs=Operateur::all();
        return view('machines/create',compact('operateurs'));
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
            'libelle'=>'required|min:2|unique:machines'
        ]);
      Machine::create($request->all());
    //  dd($operateur);

        return redirect()->route('machines.index')->with('notice','Cette machine a été ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $machines= Machine::find($id);
        return view('machines/show',compact('machines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machines=Machine::find($id);
        return view('machines/edit',compact('machines'));
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
        $machines=Machine::find($id);
        $machines->update($request->all());
        return redirect()->route('machines.index')->with('notice','La modification a été éffectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $machines=Machine::find($id);
        $machines->delete();
        return redirect()->route('machines.index')->with('notice','La suppression a été éffectuée avec succès');
    }
}
