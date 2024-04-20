<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Menu::all();
        return view('admin.Menu.ListFood',compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Menu.AddFood');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Menu::create([
            'photo' => $name,
            'title' => $request->title,
            'details' => $request->details,
            'price' => $request->price,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('Menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $menu = Menu::findOrFail($id);
       return view('admin.Menu.ShowFood', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {   
        $menu = Menu::find($id);
        
        return view('admin.Menu.EditFood',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       $menu = Menu::findOrFail($id);
       $photo= $request->file('photo');
       $name = $photo->getClientOriginalName();
       $menu->update([
        'photo' => $name,
        'title' => $request->title,
        'details' => $request->details,
        'price' => $request->price,
       ]);
       $photo->move('./pictures/', $name);
       return redirect()->route('Menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect()->route('Menu.index');



    }
   
}
