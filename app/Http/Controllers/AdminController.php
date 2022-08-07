<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Tranche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count_bloc=Bloc::count();
        // $count_tranche = DB::select('select * from tranches where quantite = ?');
        $count_tranche = DB::table('tranches')->select('quantite', 'quantite as quantite') ->get();
        // $count_tranche = DB::table('tranches')
        //      ->select(DB::raw('count(*)  quantite'))
        //      ->where('quantite')
        //      ->groupBy('quantite')
        //      ->get();
        // $count_tranche=Tranche::count()->where('quantite');
        return view('accueil',compact(['count_bloc','count_tranche']));



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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
