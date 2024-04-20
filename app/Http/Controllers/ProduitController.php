<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = Produit::latest()->paginate(6);
        return view("catalogue.product.index")->with([
            'produit'=>$produit,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view("catalogue.product.create",compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'),$image_name);
        }


        $category = Categorie::findOrFail($request->categorie_id);

        $category -> Produit()-> create([
            'nom' =>$request->nom,
            'description'=> $request->description,
            'prix_vente'=> $request->prix_vente,
            'prix_achat'=> $request->prix_achat,
            'image'=> $image_name,
            'categorie_id'=> $category->categorie_id

        ]);
        return redirect()->route("produit.index")->with([
            'success' => 'Le Produit inserer'
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie::all();
        $produit = Produit::findOrFail($id);
        return view('catalogue.product.edit',compact('categories','produit'));
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
        $Produit = Produit::find($id);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'),$image_name);
            unlink(public_path('uploads').'/'.$Produit->image);
            $Produit->image = $image_name;
        }
        $category = Categorie::findOrFail($request->categorie_id);

        $category -> Produit()-> update([
            'nom' =>$request->nom,
            'description'=> $request->description,
            'prix_vente'=> $request->prix_vente,
            'prix_achat'=> $request->prix_achat,
            'image'=> $Produit->image,
            'categorie_id'=> $category->id

        ]);
        return redirect()->route("produit.index")->with([
            'success' => 'Le Produit est mise a jour'
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
        $Produit = Produit::find($id);
        unlink(public_path('uploads').'/'. $Produit->image);
        $Produit -> delete();
        return redirect()->route('produit.index')->with([
            'success' => 'Produit supprimer'
        ]);
    }
}
