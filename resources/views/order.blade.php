
@extends('app')		 

@section('content')
 
  
    	<!-- breadcrumb -->
	<div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="{{ route('welcome') }}" class="stext-109 cl8 hov-cl1 trans-04">
                    Home
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>
    
                <span class="stext-109 cl4">
                    Shoping Cart
                </span>
            </div>
        </div>
            
        <h1 style="margin-top: 100px;"></h1>
<!-- Shoping Cart -->

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div >
                    

            
                </div>
            </div>

            <div  class="col-lg-10 col-xl-7 m-lr-auto m-b-50" >
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Subtotal:
                            </span>
                        </div>

                        <div class="size-209">
                            <span class="mtext-110 cl2">
                                <?php

                                    $cartSubTotal = Cart::getSubTotal();
                                ?>
                                {{$cartSubTotal }} ৳
                            </span>
                        </div>
                    </div>
                    <form  action="{{ route('customer') }}" method="post">
                        @csrf
                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Shipping:
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                           
                            
                            <div class="p-t-15">
                                <span class="stext-112 cl8">
                                    Customer Address
                                </span>

                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Enter Name">
                               
                                    
                                </div>

                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Enter Address">
                               
                                    
                                </div>
                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="mobile_no" placeholder="Enter Moblie No">
                               
                                    
                                </div>
                                
                                

                               
                                
                              
                                    
                            </div>

                            <div class="p-t-15">
                                    <span class="stext-112 cl8">
                                        Shipping Address     

                                    </span>

                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="shipping_address" placeholder="Enter Shipping Address">
                                   
                                        
                                    </div>
                                    
                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                            <select class="js-select2" id="mySelect"  name="shipping_cost">
                                                <option>--Select--</option>
                                                <option value="100">Dhaka</option>
                                                <option value="300">Outside Dhaka</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                    
                                   
                          
                                    <div class="flex-w" onclick="myFunction()" >
                                            <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                                Update Totals
                                            </div>
                                        </div>
                                            
                                    </div>
                                  
                                        
                                </div>
                        </div>
                    </div>

                    
                    <div class="flex-w flex-t p-t-27 p-b-33">
                        
                            <div class="size-208">
                           
                           
                                    <span class="mtext-101 cl2" >
                                            Shiping Cost:
                                        </span>
                               
                               
                                
                            </div>
    
                            <div class="size-209 p-t-1">
                                    <span id="shiping" class="mtext-110 cl2">
                                    </span> ৳
                            </div>

                            

                            
                        <div class="size-208">
                           
                           
                                
                           
                           
                            <span class="mtext-101 cl2" >
                                total:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">

                            <input id="total" class="mtext-110 cl2" type="text">
                    
                            <span id="total"  name="total" class="mtext-110 cl2">
                                   
                            </span>
                            ৳
                        </div>
                    </div>
                   <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="hidden" name="price">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="hidden" name="quantity">
                               
                    <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
</form>
            
        </div>
    </div>

    

	@endsection



<script>
function myFunction() {
  var x = document.getElementById("mySelect").value ;
  var y = "<?php echo $cartSubTotal ?>";

  x = parseInt(x, 10);
  y = parseInt(y, 10);
  var z = x+y;
  document.getElementById("shiping").innerHTML = x;
  document.getElementById("total").innerHTML = z;
}
</script>
