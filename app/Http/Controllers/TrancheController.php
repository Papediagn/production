<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Tranche;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class TrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tranches=Tranche::all();
        $blocs=Bloc::all();
        return view('tranches/index',compact('tranches','blocs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blocs=Bloc::all();
        return view('tranches/create',compact('blocs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // protected $fillable =['long','larg','epaisseur','qunatite','observation','bloc_id'];

        $request->validate([
            'long'=>'required',
            'larg'=>'required',
            'epaisseur'=>'required',
            'quantite'=>'required',
            'bloc_id'=>'required'
        ]);
         Tranche::create($request->all());
    //  dd($operateur);

        return redirect()->route('tranches.index')->with('notice','Les tranches ont été ajoutées avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tranches= Tranche::find($id);
        return view('tranches/show',compact('tranches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tranches=Tranche::find($id);
        return view('tranches/edit',compact('tranches'));
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
        $tranches=Tranche::find($id);
        $tranches->update($request->all());
        return redirect()->route('tranches.index')->with('notice','La modification a été éffectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tranches=Tranche::find($id);
        $tranches->delete();
        return redirect()->route('tranches.index')->with('notice','La suppression a été éffectuée avec succès');
    }
    // public function getAlltranche()
    // {
    //     $tranches=Tranche::all();
    //     return view('tranches',compact('tranches'));
    // }
    // public function downloadPDF()
    // {
    //     $tranches= Tranche::all();
    //     $pdf = PDF::loadView('tranches.index',compact('tranches'));
    //     return $pdf->download('tranches.pdf');

    // }
    public function facture($id)
    {
        $blocs= Tranche::where('bloc_id',$id)->get();
    //  dd($blocs);
        // $pdf = PDF::loadView('facture',compact('tranches'));
        // return $pdf->stream('tranches.pdf');
       return view('tranches/facture',compact('blocs'));
    }
}
