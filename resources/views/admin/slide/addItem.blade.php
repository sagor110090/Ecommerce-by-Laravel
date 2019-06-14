@extends('layouts.app')


@section('titel','Slide Show')

@section('content')


<div class="col-md-12 ">
    <div class="card ">
        <div class="card-header">
    
    
        </div>
    
        <div class="card-body ">
            <form action="{{ route('slide.store' ) }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <input type="text" class="form-control" name="name" placeholder="Enter Item name"  ><br>

               
                <input type="file" class="form-control" name="image" placeholder="Enter image"  ><br>
                <input class="btn btn-success" type="submit" value="submit">
                 
            </form>
    
        </div>
    
    </div>

</div>

   


@endsection