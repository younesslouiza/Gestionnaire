<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devis = Devis::latest()->paginate(6);
        return view("vente.devis.index")->with([
            'devis'=>$devis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vente.devis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Devis::create([
            'date_devis'=>$request->date_devis,
            'numero_commande'=>$request->numero_commande,
            'id_client'=>$request->id_client

        ]);
        return redirect()->route('devis.index')->with([
            'success' => 'Devis ajouté avec success'
        ]);
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
        $devis = Devis::find($id);
        return view('vente.devis.edit',compact('devis'));
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
        $devis = Devis::find($id);
        $devis->update([
            'date_devis'=>$request->date_devis,
            'numero_commande'=>$request->numero_commande,
            'id_client'=>$request->id_client
        ]);
        return redirect()->route('devis.index')->with([
            'success' => 'Devis modifier avec success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Devis::destroy($id);
        return redirect()->route('devis.index')->with([
            'success' => 'Bien suppression'
        ]);

    }
}
