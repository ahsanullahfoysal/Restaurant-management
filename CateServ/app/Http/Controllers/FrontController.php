<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Event;
use App\Models\Menu;
use App\Models\Offer;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front(){
        
        $menu = Menu::all();
        $event = Event::all();
        $slider = Slider::find(1);
        $offer = Offer::all();
        $about =About::first();
        

        return view('welcome',compact('menu','event','slider','offer','about'));

    }
}
