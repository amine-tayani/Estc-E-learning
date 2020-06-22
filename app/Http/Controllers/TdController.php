<?php

namespace App\Http\Controllers;

use App\Td;
use App\Cours;
use Illuminate\Http\Request;

class TdController extends Controller
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
        $td = Td::all();
        return view('td.td_list',['td' => $td]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cours::all();
        return view('td.td-create',['coursList' => $cours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $td = new Td;
       if($request->file('file')){
           $file = $request->file('file');
           $filename = time().'.'.$file->getClientOriginalExtension();
           $request->file->move('storage/td/',$filename);

           $td->pdf=$filename;
       }
       $td->titre=$request->titre;
       $td->contenu=$request->description;
       $td->cours_id=$request->cours_id;
       $td->save();
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Td  
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $td = Td::find($id);
        return view('td.view-td',compact('td'));
    }

    public function download($file){
         return response()->download('storage/td/',$file);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Td  
     * @return \Illuminate\Http\Response
     */

    public function modifier()
    {
        $td = Td::all();
        return view('td.modifier-td',['td' => $td]);
    }
    public function edit($id)
    {
        $cours = Cours::all();
        $td = Td::findOrFail($id);
        return view('td.edit-td', compact('td','cours'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Td  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $td = Td::find($id);

        if($request->file('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/td/',$filename);
 
            $td->pdf=$filename;
        }
        $td->titre=$request->titre;
        $td->contenu=$request->description;
        $td->cours_id=$request->cours_id;
        $td->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Td
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $td = Td::findOrFail($id);
        $td->delete();

        return redirect()->back();
    }
}
