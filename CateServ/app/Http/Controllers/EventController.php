<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Event::all();
        return view('admin.Event.Eventlist',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Event.AddEvent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Event::create([
            'photo' => $name,
            'title' => $request->title,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('Event.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Event::find($id);
        
        return view('admin.Event.EvenEdit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
       $photo= $request->file('photo');
       $name = $photo->getClientOriginalName();
       $event->update([
        'photo' => $name,
        'title' => $request->title,
       ]);
       $photo->move('./pictures/', $name);
       return redirect()->route('Event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect()->route('Event.index');
    }

 
}
