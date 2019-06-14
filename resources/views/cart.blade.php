
@extends('app')		

@section('content')
 
	<h1 style="margin-top: 100px;"></h1>

<!-- Shoping Cart -->

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4">Quantity</th>
                                <th class="column-5">Total</th>
                                <th class="column-6">Action</th>
                            </tr>

                            @foreach ($cartCollection as $cartCollection)
                                
                          
                            <tr class="table_row">
                                <td class="column-1">
                                    <div>
                                           <img src=" {{ asset('public/frontend/images/icons/icon-close2.png') }}"  alt="IMG">
                
                                    </div>
                                </td>
                                <td class="column-2">{{$cartCollection->name}}</td>
                                <td class="column-3">{{$cartCollection->price}}</td>
                                <form action="{{ route('CartUpdate') }}" method="post">
                                    @csrf
                                <td class="column-4">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>
                                        
                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num_product" value="{{$cartCollection->quantity}}">
                                        

 

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="column-5">{{$cartCollection->price}}</td>
                                 
                                        <td class="column-6">
                                            <div>
                                                    <a href="{{ route('CartRemove',$cartCollection->id) }}"><span class="btn btn-dark">Delete</span>
                                                      </a> <br><br>
                                                      
                                        
                                            <input type="hidden" name="id" value="{{$cartCollection->id}}">
                                            <input type="hidden" name="old" value="{{$cartCollection->quantity}}">
                                            
                                            <input type="submit" class="btn btn-dark" value="Update">

                                        </form>                
                                                      
                                            </div>

                                            <div>
                                                 
                                        </div>
                                        </td>
                            
                            
                        </tr>

                            @endforeach
                            
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
                                
                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Apply coupon
                            </div>
                        </div>

                        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                           <a href=""> Update Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    

	@endsection


