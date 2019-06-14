<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Category;
use App\Item;
use App\Reservation;
use Cart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slide = Slider::all();
        $category = Category::all();
        $item = Item::all();
       
        return view('welcome')->with('slide',$slide)->with('category',$category)->with('item',$item);
        
    }  
 
    public function product()
    {
        $slide = Slider::all();
        $category = Category::all();
        $item = Item::all();
       
        return view('product')->with('slide',$slide)->with('category',$category)->with('item',$item);
        
    }  

   

    public function  productdetail($id)
    {
        $category = Category::all();
        $items = Item::find($id);
       
        return view('productdetail')->with('items',$items)->with('categorys',$category);
        
    } 

    public function contact(Request $request)
    {       //the are reservation my folt
        
        $contact = new Reservation;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->time = $request->time;
        $contact->message = $request->message;
        $contact->Status = '0';
        $contact->save();
        return redirect()->route('welcome');


    }
	
	
 
	
		
 
 

   
		 public function atToCart(Request $request)
			{
				$category = Category::all();
                $item = Item::all();
       

				       $add = Cart::add(array(
							'id' => $request->id,
							'name' => $request->name,
							'price' => $request->price,
							'quantity' => $request->quantity,
							'attributes' => [
							
								'color' =>$request->color,
								'size'	=>$request->size
							
							],
							
						));
					   
                        return view('product')->with('category',$category)->with('item',$item);
				
			
            }

            public function CartRemove($id)
			{
				 
                Cart::remove($id);
                
                $cartCollection = Cart::getContent();
                return view('cart')->with('cartCollection',$cartCollection );
			
            }

            public function CartUpdate(Request $request)
			{
				
                $id = $request->id;
                $quantity = $request->num_product;
                $quantity1 = $request->old;
                $quantity2 = $quantity - $quantity1;

                Cart::update($id, array(
                    'quantity' => $quantity2, 
                     // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
                  ));
					   
                        $cartCollection = Cart::getContent();
                        return view('cart')->with('cartCollection',$cartCollection );
			
			
            }

           
           
            public function c($id,$quantity)
			{


                Cart::update($id, array(
                    'quantity' => $quantity, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
                  ));
                  
                
                
                $cartCollection = Cart::getContent();
                return view('cart')->with('cartCollection',$cartCollection );
               // return redirect()->route('cart')->with('cartCollection',$cartCollection );

            }


            public function Cart()
			{
                
				 
                $cartCollection = Cart::getContent();
                return view('cart')->with('cartCollection',$cartCollection );
			
            }
            
            
 
}
