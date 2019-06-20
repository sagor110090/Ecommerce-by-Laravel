@extends('layouts.app')

@section('content')

@push('css')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/tagger.css') }}">


@endpush

<div class="col-md-12 ">
    <div class="card ">
        <div class="card-header">
    
    
        </div>
    
        <div class="card-body ">
            <form action="{{ route('item.store' ) }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <input type="text" class="form-control" name="name" placeholder="Enter Item name"  ><br> 
               
                
                <select class="form-control" name="category">
                 <option value="">--Select Category--</option>
                @foreach ($categorys as $category)
                <option value="{{$category->id}}" >{{$category->name}}</option>
                @endforeach
              

                </select>


               <br> 
               <br>
                <input type="file" class="form-control" name="image1" placeholder="Enter image"  ><br>
                <input type="file" class="form-control" name="image2" placeholder="Enter image"  ><br>
                <input type="file" class="form-control" name="image3" placeholder="Enter image"  ><br>
                <br>
                <br>
                <input type="number" class="form-control" name="quantity" placeholder="Quantity"  ><br> 


                <input type="text"   class="form-control" name="size" placeholder="S M L XL"  ><br> 
                <input type="text"  class="form-control" name="color" placeholder="Red Blue Green"  ><br> 
               
                <input type="number" class="form-control" name="Price" placeholder="Enter price"  ><br>
                <textarea name="description" placeholder="Enter Description" class="form-control" id="" cols="30" rows="5"></textarea><br>
                <input class="btn btn-success" type="submit" value="submit"> 
                 
            </form>
    
        </div>
    
    </div>

</div>

 @push('script')
 <script src="{{ asset('public/frontend/js/tagger.js')}}"></script>
 <script>
        var t = tagger(document.querySelector('[name="size"]'), {
          allow_duplicates: false,
          allow_spaces: true
        });
      </script>
 @endpush  


@endsection