<?php

namespace App\Http\Controllers;

use App\Models\BonCommande;
use Illuminate\Http\Request;

class BonCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bonC = BonCommande::latest()->paginate(6);
        return view('vente.bon de commande.index')->with([
            'bonC'=>$bonC
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vente.bon de commande.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        BonCommande::create([
            'bon_commandes' => $request -> bon_commandes,
            'quantit_cmd'=>$request-> quantit_cmd,
            'prix_total'=>$request-> prix_total,
            'id_produit'=>$request-> id_produit,
            'total_tva'=>$request-> total_tva,
            'total_ttc'=>$request-> total_ttc,
        ]);
        return redirect()->route('bon_de_commande.index')->with([
            'success' => 'Le catégorie ajouté avec success'
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
        $bonCo = BonCommande::find($id);
        return view('vente.bon de commande.edit')->with([
            'bonCo' => $bonCo
        ]);
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
        $bonC = BonCommande::find($id);
        $bonC -> update([
            'bon_commandes' => $request -> bon_commandes,
            'quantit_cmd'=>$request-> quantit_cmd,
            'prix_total'=>$request-> prix_total,
            'id_produit'=>$request-> id_produit,
            'total_tva'=>$request-> total_tva,
            'total_ttc'=>$request-> total_ttc,
        ]);
        return redirect()->route('bon_de_commande.index')->with([
            'success' => 'Le catégorie ajouté avec success'
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
        BonCommande::destroy($id);
        return redirect()->route('bon_de_commande.index')->with([
            'success' => 'Le catégorie ajouté avec success'
        ]);

    }
}
