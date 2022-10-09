<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Machine;
use App\Models\Tranche;
use Illuminate\Http\Request;

class BlocController extends Controller
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
        $blocs= Bloc::all();
        return view('blocs/index',compact('blocs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $machines=Machine::all();
        return view('blocs/create',compact('machines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//protected $fillable=['designation','numero','longueur','largeur','hauteur','qualite','etat','date_entrer','heure_entrer','date_sortie','heure_sortie','machine_id'];

        $request->validate([
            'designation'=>'required',
            'numero'=>'required',
            'longueur'=>'required',
            'largeur'=>'required',
            'hauteur'=>'required',
            'tonnage'=>'required',
            'machine_id'=>'required'
        ]);
         Bloc::create($request->all());
    //  dd($operateur);

        return redirect()->route('blocs.index')->with('notice','Cet bloc a été ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $blocs= Bloc::find($id);
        // return view('blocs/show',compact('blocs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blocs=Bloc::find($id);
        return view('blocs/edit',compact('blocs'));
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
        $blocs=Bloc::find($id);
        $blocs->update($request->all());
        return redirect()->route('blocs.index')->with('notice','La modification a été éffectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blocs=Bloc::find($id);
        $blocs->delete();
        return redirect()->route('blocs.index')->with('notice','La suppression a été éffectuée avec succès');
    }

    // public function facture($id)
    // {
    //     $bloc= Bloc::find($id);

    //     // $pdf = PDF::loadView('facture',compact('tranches'));
    //     // return $pdf->stream('tranches.pdf');
    //    return view('tranches/facture',compact('bloc'));
    // }
}

