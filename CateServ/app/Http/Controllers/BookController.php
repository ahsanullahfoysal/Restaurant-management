<?php

namespace App\Http\Controllers;

use App\Mail\ConfrimMail;
use App\Mail\SendMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Mail;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book =Book::all();
        return view('admin.Booking.Bookinglist',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       return view('admin.Booking.BookingCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->has('name')) {
            Book::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date' => $request->date,
                'people' => $request->people,
                'time' => $request->time,
                'place' => $request->place,
                'meals' => $request->meals,
                'event' => $request->event
            ]);
            Mail::to($request->email)->send(new SendMail);
            return redirect()->back()->with('success', 'successfully register your booking');
        } elseif ($request->has('id2')) {
            $id2 = $request->id2;
            $b = Book::find($id2);
            $b->update(['status' => 'Pending']);
           
            return redirect('bookingconfirm');
        } elseif ($request->has('id1')) {
            $id1 = $request->id1;
            $b = Book::find($id1);
            $b->update(['status' => 'Confirmed']);
            Mail::to($b->email)->send(new ConfrimMail);
            return redirect('bookingconfirm');
        }


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
        $id = Book::find($id);
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect('Book');
    }
    
}

