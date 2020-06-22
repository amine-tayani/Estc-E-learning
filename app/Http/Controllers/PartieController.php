<?php

namespace App\Http\Controllers;

use App\Partie;
use App\Cours;

use Illuminate\Http\Request;

class PartieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partie = Partie::all();
        return view('partie.partie_list',['partie' => $partie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cours = Cours::all();
       return view('partie.partie-create',['coursList' => $cours]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $partie = new Partie;
       $partie->titre = $request->titre;
       $partie->contenu = $request->contenu;
       $partie->cours_id = $request->cours_id;
       $partie->save();
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partie  $partie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partie = Partie::find($id);
        return view('partie.view-partie',compact('partie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partie  $partie
     * @return \Illuminate\Http\Response
     */

    public function modifier()
    {
        $partie = Partie::all();
        return view('partie.modifier-partie',['partie' => $partie]);
    }
    public function edit($id)
    {
        $cours = Cours::all();
        $partie = Partie::findOrFail($id);
        return view('partie.edit-partie', compact('partie','cours'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partie  $partie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partie = Partie::find($id);
        $partie->titre=$request->titre;
        $partie->contenu=$request->contenu;
        $partie->cours_id=$request->cours_id;
        $partie->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\partie  $partie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partie = partie::findOrFail($id);
        $partie->delete();

        return redirect()->back();
    }
}
