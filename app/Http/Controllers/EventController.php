<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(15);
        return View('event.index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required'
            , 'name_ta' => 'required'
            ,'from_date' => 'required'
            ,'to_date' => 'nullable'
            ,'from_time' => 'required'
            ,'to_time' => 'required'
            , 'venue' => 'required'
            , 'venue_ta' => 'required'
            , 'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            $file = $request->file('cover_image');
            $filenameWithExt = $file->getClientOriginalName();

            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->storeAs('public/event_images',$fileNameToStore);
        }   
        else{
            $fileNameToStore = 'no_image.jpg';
        }

        $event = new Event();
        $event->name = $request->input('name');
        $event->name_ta = $request->input('name_ta');
        $event->from_date = $request->input('from_date');
        $event->to_date = $request->input('to_date');
        $event->from_time = $request->input('from_time');
        $event->to_time = $request->input('to_time');
        $event->venue = $request->input('venue');
        $event->venue_ta = $request->input('venue_ta');
        $event->cover_image = $fileNameToStore;

        $event->save();

        return redirect('/event')->with('success','Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('event.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit')->with('event',$event);
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
        $this->validate($request , [
            'name' => 'required'
            , 'name_ta' => 'required'
            ,'from_date' => 'required'
            ,'to_date' => 'nullable'
            ,'from_time' => 'required'
            ,'to_time' => 'required'
            , 'venue' => 'required'
            , 'venue_ta' => 'required'
            , 'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            $file = $request->file('cover_image');
            $filenameWithExt = $file->getClientOriginalName();

            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->storeAs('public/event_images',$fileNameToStore);
        }   
        else{
            $fileNameToStore = 'no_image.jpg';
        }
        
        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->name_ta = $request->input('name_ta');
        $event->from_date = $request->input('from_date');
        $event->to_date = $request->input('to_date');
        $event->from_time = $request->input('from_time');
        $event->to_time = $request->input('to_time');
        $event->venue = $request->input('venue');
        $event->venue_ta = $request->input('venue_ta');
        $event->cover_image = $fileNameToStore;

        $event->save();

        return redirect('/event')->with('success','Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/event')->with('success','Event Removed');
    }
}
