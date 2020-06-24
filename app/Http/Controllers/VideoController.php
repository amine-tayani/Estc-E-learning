<?php

namespace App\Http\Controllers;

use App\Video;
use App\Cours;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        $video = Video::all();
        return view('video.video_list',['video' => $video]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cours::all();
        return view('video.video-create',['coursList' => $cours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $video = new Video;
       if($request->file('file')){
           $file = $request->file('file');
           $filename = time().'.'.$file->getClientOriginalExtension();
           $request->file->move('storage/video/',$filename);

           $video->video=$filename;
       }
       $video->cours_id=$request->cours_id;
       $video->save();
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        return view('video.view-video',compact('video'));
    }

    public function download($file){
         return response()->download('storage/video/',$file);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  
     * @return \Illuminate\Http\Response
     */

    public function modifier()
    {
        $video = Video::all();
        return view('video.modifier-video',['video' => $video]);
    }
    public function edit($id)
    {
        $cours = Cours::all();
        $video = Video::findOrFail($id);
        return view('video.edit-video', compact('video','cours'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::find($id);

        if($request->file('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/video/',$filename);
 
            $video->video=$filename;
        }
        $video->cours_id=$request->cours_id;
        $video->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->back();
    }
}
