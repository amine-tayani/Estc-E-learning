<?php

namespace App\Http\Controllers;

use App\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
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
        $cours = Cours::all();
        return view('cours.cours_list',['cours' => $cours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cours.cours-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cours = new Cours;
       if($request->file('file')){
           $file = $request->file('file');
           $filename = time().'.'.$file->getClientOriginalExtension();
           $request->file->move('storage/',$filename);

           $cours->pdf=$filename;
       }
       $cours->libele=$request->libele;
       $cours->description=$request->description;
       $cours->save();
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cours = Cours::find($id);
        return view('cours.view-cours',compact('cours'));
    }

    public function download($file){
         return response()->download('storage/',$file);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */

    public function modifier()
    {
        $cours = Cours::all();
        return view('cours.modifier-cours',['cours' => $cours]);
    }
    public function edit($id)
    {
        $cours = Cours::findOrFail($id);
        return view('cours.edit-cours', compact('cours'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cours = Cours::find($id);

        if($request->file('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/',$filename);
 
            $cours->pdf=$filename;
        }
        $cours->libele=$request->libele;
        $cours->description=$request->description;
        $cours->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cours = Cours::findOrFail($id);
        $cours->delete();

        return redirect()->back();
    }
}
