<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Slider::all();
        return view('admin.Slider.Sliderlist',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Slider.AddSlider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $image = $photo->getClientOriginalName();
        Slider::create([
            'photo' => $image,
            'name' => $request->name,
            'title' => $request->title,
            'btn1' => $request->btn1,
            'btn2' => $request->btn2,
            
        ]);
        $photo->move('./pictures/', $image);
        return redirect()->route('Slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
       return view('admin.Slider.ShowFood', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        
        return view('admin.Slider.SliderEdit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request,$id)
    {
       $slider = Slider::findOrFail($id);
       $photo= $request->file('photo');
       $image = $photo->getClientOriginalName();
       $slider->update([
            'photo' => $image,
            'name' => $request->name,
            'title' => $request->title,
            'btn1' => $request->btn1,
            'btn2' => $request->btn2,
       ]);
       $photo->move('./pictures/',$image);
       return redirect()->route('Slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('Slider.index');
    }
   
}
