<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.About.Aboutlist',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.About.AddAbout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo =$request->file('photo');
        $image = $photo->getClientOriginalName();
        About::create([
            'photo' => $image,
            'title' => $request->title,
            'details' => $request->details,
            'service1' => $request->service1,
            'service2' => $request->service2,
            'service3' => $request->service3,
            'service4' => $request->service4,
        ]);
        $photo->move('./pictures/', $image);
        return redirect()->route('About.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::find($id);
        
        return view('admin.About.EditAbout',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect()->route('About.index');
    }
}
