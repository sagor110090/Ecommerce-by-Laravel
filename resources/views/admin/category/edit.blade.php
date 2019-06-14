@extends('layouts.app')
@section('titel','Category')
@section('content')


<div class="col-md-12">
    <div class="card ">
        <div class="card-header">
    
    
        </div>
    
        <div class="card-body ">
            <form action="{{ route('category.update',$category->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <input type="text" class="form-control" value="{{$category->name}}" name="name" placeholder="Enter Item name"  ><br>
               
              

               <input class="btn btn-success" type="submit" value="submit">
                 
            </form>
    
        </div>
    
    </div>

</div>

   


@endsection