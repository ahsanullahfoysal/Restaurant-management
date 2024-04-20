<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data= Offer::all();
       return view('admin.Offer.listOffer',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.Offer.AddOffer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo= $request->file('photo');
        $image = $photo->getClientOriginalName();
        Offer::create([
            'photo' => $image,
            'title' => $request->title,
            'details' => $request->details,
            'btn' => $request->btn,
        ]);
        $photo->move('./pictures/',$image);
        return redirect()->route('Offer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        return view('admin.Offer.EditOffer',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);
        $photo= $request->file('photo');
        $image = $photo->getClientOriginalName();
        $offer->update([
         'photo' => $image,
         'title' => $request->title,
         'details' => $request->details,
         'btn' => $request->btn,
        ]);
        $photo->move('./pictures/', $image);
        return redirect()->route('Offer.index');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Offer::find($id)->delete();
        return redirect()->route('Offer.index');
    }
}
