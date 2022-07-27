<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        // dd($location);
        return view('event.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(auth()->user());
        $this->validate($request, [
            'title'=> 'required',
            'event_date'=>'required',
            'description'=>'required',
            'price'=>'required',
            'no_of_seats'=>'required',
            'location'=>'required'
        ]);
        $event = new Event([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'no_of_seats'=>$request->no_of_seats,
            'user_id'=>auth()->user()->id,
            'location_id'=>$request->location,
            'event_date'=>$request->event_date
        ]);
        $event->save();
        if($files = $request->file('files')){
            foreach($files as $file){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name =  $image_name.'.'.$ext;
                $upload_path = 'images/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $request['event_id'] = $event->id;
                $request['image'] =$image_url;
                Image::create($request->all());
            }
        }
        return redirect().route('/event/'.$event->id);
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
        $event = Event::findOrFail($id);
        // dd($event);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
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
        $event = Event::findOrFail($id);
        $event->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'no_of_seats'=>$request->no_of_seats
        ]);

        if($files = $request->file('files')){
            foreach($files as $file){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name =  $image_name.'.'.$ext;
                $upload_path = 'images/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $request['event_id'] = $event->id;
                $request['image'] =$image_url;
                Image::create($request->all());
            }
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  
        $event = Event::findOrFail($id);

        $images = Image::where('event_id', $event->id)->get();
        foreach($images as $image){
            if(File::exists(asset($image))){
                File::delete(asset($image));
            }
        }
        $event->delete();
        return back();
    }
}
