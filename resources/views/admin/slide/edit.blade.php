@extends('layouts.app')
@section('titel','Slide Show')
@section('content')


<div class="col-md-12 ">
    <div class="card ">
        <div class="card-header ">
    
    
        </div>
    
        <div class="card-body ">
            <form action="{{ route('slide.update',$slide->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <input type="text" class="form-control" value="{{$slide->name}}" name="name" placeholder="Enter Item name"  ><br>
                 
               
                <input type="file" class="form-control" value="{{$slide->image}}" name="image" placeholder="Enter image"  ><br>
                <input class="btn btn-success" type="submit" value="submit">
                 
            </form>
    
        </div>
    
    </div>

</div>

   


@endsection