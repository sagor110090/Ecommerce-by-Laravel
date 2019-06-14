@extends('layouts.app')

@section('titel','size Show')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endpush
@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
              <a href="{{ route('size.create') }} ">

                <button class="btn btn-facebook">
                    <i class="material-icons">
                        add_shopping_cart
                        </i>
                     
                  

                </button>
                    

              </a>
                
                <p class="card-category"> add Item for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="item_table" style="width:100%">
        <thead>
           
            <tr>
                <th>#</th>
                <th>id</th>
                 
                <th>size</th>
                
                <th>Action</th>
    
            </tr>
        </thead>
        <tbody>
@foreach ($size as $size)
     
                <tr>
                        <td>#</td>
                        <td>{{$size->id}}</td>
                        
                         
                       <td>{{$size->size}}</td> 
                        
                        <td>
                            <a href="{{ route('size.edit',$size->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                            <form id="delete-form-{{ $size->id }}" action="{{ route('size.destroy',$size->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $size->id }}').submit();
                            }else {
                                event.preventDefault();
                                    }"><i class="material-icons">delete</i></button>
                        </td>
                
                    </tr>
                

        


@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@push('script')

 
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript">
    $(document).ready(function() {
    $('#item_table').DataTable();
} );
</script>   
@endpush
