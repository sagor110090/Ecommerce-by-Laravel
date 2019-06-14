<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Category;
use App\Slider;
use App\Reservation;

class adminController extends Controller
{
    public function index()
    {   
        $slide = Slider::all();
        $category = Category::all();
        $item = Item::all(); 
        $reserve = Reservation::all(); 
        return view('admin.dashboard')->with('slide',$slide)
        ->with('category',$category)->with('item',$item)
        ->with('reserve',$reserve) ;
    }


   

}
