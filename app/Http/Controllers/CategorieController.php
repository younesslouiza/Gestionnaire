<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::latest()->paginate(8);
        return view("catalogue.category.index",compact('categories'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogue.category.create');
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
            'name'  => 'Required',
            'description'=> 'Required',
        ]);

        Categorie::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);
        return redirect()->route("categorie.index")->with([
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
    public function edit($slug)
    {
        $categories = Categorie::where("slug",$slug)->first();
        return view("catalogue.category.edit",compact('categories')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $Categories = Categorie::where('slug',$slug)->first();
        $Categories->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent' => $request->parent,
            'description' => $request->description,
        ]);
        return redirect()->route('categorie.index')->with([
            'success' => 'La Catégorie est mise a jour '
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $Categories = categorie::where('slug',$slug)->first();
        $Categories->delete();

        return redirect()->route("categorie.index")->with([
            'success' => 'Le Categorie Supprimer'
        ]);
    }
}
