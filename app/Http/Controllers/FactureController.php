<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facture = Facture::latest()->paginate(6);
        return view('vente.facture.index')->with([
            'facture' => $facture
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vente.facture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Facture::create([
            'client'=>$request->client,
            'date'=>$request->date,
            'ht'=>$request->ht,
            'ttc'=>$request->ttc,
            'status'=>$request->status
        ]);
        return redirect()->route('facture.index')->with([
            'success' => 'La facture ajouté avec success'
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
        $facture = Facture::find($id);
        return view('vente.facture.edit',compact('facture'));
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
        $facture = Facture::find($id);
        $facture->update([
            'client'=>$request->client,
            'date'=>$request->date,
            'ht'=>$request->ht,
            'ttc'=>$request->ttc,
            'status'=>$request->status
        ]);
        return redirect()->route('facture.index')->with([
            'success' => 'La facture modifier avec success'
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
        Facture::destroy($id);
        return redirect()->route('facture.index')->with([
            'success' => 'Bien suppression'
        ]);

    }
}
