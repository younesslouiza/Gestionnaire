<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marque = Marque::latest()->paginate(6);
        return view("catalogue.marque.index",compact('marque'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogue.marque.create');
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

        Marque::create([
            'marque'=>$request->marque,
            'description'=>$request->description,
            'image'=>$image_name
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
        $marque = Marque::find($id);
        return view('catalogue.marque.edit')->with([
            'marque'=>$marque
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
        $marque = Marque::find($id);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'),$image_name);
            unlink(public_path('uploads').'/'.$marque->image);
            $marque->image = $image_name ;
        }
        $marque->update([
            'marque'=>$request->marque,
            'description'=>$request->description,
            'image'=>$image_name
        ]);
        return redirect()->route('marque.index')->with([
            'success' => 'La Marque ajouté avec success'
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
        $marque = Marque::find($id);
        unlink(public_path('uploads').'/'.$marque->image);
        $marque->destroy($id);
        return redirect()->route('marque.index')->with([
            'success' => 'La Marque supprimer avec success'
        ]);
    }
}
