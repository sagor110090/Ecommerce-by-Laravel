<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Category;
use App\Item;
use App\Reservation;
use App\Customer;
use App\Order;
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

    public function about()
    {
        
       
        return view('about');
        
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

    public function customer(Request $request)
    {       //the are reservation my folt
        
        $cartCollection = Cart::getContent();
        $customer = new Customer;
        $customer->name = $request->name;
 
        //$customer->orders = serialize($cartCollection); 
        $customer->mobile_no = $request->mobile_no;
   
        $customer->address = $request->address;
        $customer->shipping_address = $request->shipping_address;
        $customer->shipping_cost = $request->shipping_cost;
        $customer->total = $request->total;
        $customer->status = '0';
        $customer->save();



        

        foreach ($cartCollection as $cart) {
            $orders = new Order;
            $orders->customer_name = $request->name;
            $orders->product_name = $cart->name;
            $orders->price = $cart->price;
            $orders->quantity = $cart->quantity;
            $orders->save();
        }



        





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
                                'size'	=>$request->size,
                                'image' =>$request->image
							
							],
							
                        ));
                        
                        
					   
                        return view('product')->with('category',$category)->with('item',$item);
				
			
            } 

            public function CartRemove($id)
			{
				 
                Cart::remove($id);
                
                $cartCollection = Cart::getContent();
                return view('cart')->with('cartCollections',$cartCollection );
			
            }

            public function CartUpdate(Request $request)
			{
				
                $id = $request->id;
                $quantity = $request->num_product;
            
               
                
                Cart::update($id, array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => $quantity
                    ),
                     // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
                  ));
					   
                        $cartCollection = Cart::getContent();
                        return redirect()->route('cart')->with('cartCollection',$cartCollection);
			
			
            }

           
           
            public function chackOut()
			{


               
                return view('cart')->with('cartCollections',$cartCollection );
               // return redirect()->route('cart')->with('cartCollection',$cartCollection );

            }


            public function Cart()
			{
                
				 
                $cartCollection = Cart::getContent();
                return view('cart')->with('cartCollections',$cartCollection);
			
            }
            
            
 
}
