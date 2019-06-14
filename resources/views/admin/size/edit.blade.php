@extends('layouts.app')
@section('titel','Slide Show')
@section('content')


<div class="col-md-12 ">
    <div class="card ">
        <div class="card-header ">
    
    
        </div>
    
        <div class="card-body ">
            <form action="{{ route('size.update',$size->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
               

                <input type="text" class="form-control" value="{{$size->size}}" name="size" placeholder="Enter Item name"  ><br>
                 
               
                 
                <input class="btn btn-success" type="submit" value="submit">
                 
            </form>
    
        </div>
    
    </div>

</div>

   


@endsection