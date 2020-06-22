<?php

namespace App\Http\Controllers;

use App\Tp;
use App\Cours;
use Illuminate\Http\Request;

class TpController extends Controller
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
        $tp = Tp::all();
        return view('tp.tp_list',['tp' => $tp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cours::all();
        return view('tp.tp-create',['coursList' => $cours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $tp = new Tp;
       if($request->file('file')){
           $file = $request->file('file');
           $filename = time().'.'.$file->getClientOriginalExtension();
           $request->file->move('storage/tp/',$filename);

           $tp->pdf=$filename;
       }
       $tp->titre=$request->titre;
       $tp->contenu=$request->description;
       $tp->cours_id=$request->cours_id;
       $tp->save();
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tp  
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tp = Tp::find($id);
        return view('tp.view-tp',compact('tp'));
    }

    public function download($file){
         return response()->download('storage/tp/',$file);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tp  
     * @return \Illuminate\Http\Response
     */

    public function modifier()
    {
        $tp = Tp::all();
        return view('tp.modifier-tp',['tp' => $tp]);
    }
    public function edit($id)
    {
        $cours = Cours::all();
        $tp = Tp::findOrFail($id);
        return view('tp.edit-tp', compact('tp','cours'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tp  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tp = Tp::find($id);

        if($request->file('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/tp/',$filename);
 
            $tp->pdf=$filename;
        }
        $tp->titre=$request->titre;
        $tp->contenu=$request->description;
        $tp->cours_id=$request->cours_id;
        $tp->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tp = Tp::findOrFail($id);
        $tp->delete();

        return redirect()->back();
    }
}
