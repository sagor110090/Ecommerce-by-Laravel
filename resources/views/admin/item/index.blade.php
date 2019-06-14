@extends('layouts.app')

@section('titel','item')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   
@endpush
@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
              <a href="{{ route('item.create') }} ">

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
                  <table class="table" id="item_table" border=".3px">
        <thead>
           
            <tr class="thead-dark">
                <th width="100px">#</th>
                <th width="220px"  style="text-align:center" >Item</th>
                <th  width="220px" style="text-align:center" >Category</th>
                <th  width="220px" style="text-align:center">Image</th>
                <th  width="220px" style="text-align:center">Price</th>
                <th  width="220px" style="text-align:center">Size</th>
                <th  width="220px" style="text-align:center">Color</th>
                <th  width="150px" style="text-align:center">Quantity</th>
                <th  width="500px" style="text-align:center">Description</th>
                <th width="220px"  style="text-align:center">Action</th>

                <style>
                .text-center{
                text-align: center;   
                
}
                </style>
    
            </tr>
        </thead>
        <tbody>

          <?php
              $i=1;
          ?>
@foreach ($items as $item)
     
                <tr> 
                        <td>
                          <strong>
                            <?php
                            echo  $i++;
                         ?>
                          </strong></td>
                        <td style="text-align:center" >{{$item->name}}</td>
                        <td style="text-align:center" >{{$item->category->name }}</td>
                         
                       <td style="text-align:center" >
                         <p><img src="{{ asset('public/'.Storage::url($item->image1))  }} " alt="" height="30px" width="30px"></p>
                        <p><img src="{{ asset('public/'.Storage::url($item->image2))  }} " alt="" height="30px" width="30px"></p>
                        <p> <img src="{{ asset('public/'.Storage::url($item->image3))  }} " alt="" height="30px" width="30px"></p>
                      </td> 

                       <td style="text-align:center" >{{$item->price}}</td>
                       <td style="text-align:center" >{{$item->size }}</td>
                       <td style="text-align:center"   >{{$item->color }}</td>
                       <td style="text-align:center"  >{{$item->quantity }}</td>
                       <td style="text-align:center"  >{{$item->description }}</td>
                        
                        <td style="text-align:center" >
                            <a href="{{ route('item.edit',$item->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                            <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $item->id }}').submit();
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

 
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript">
    $(document).ready(function() {
    $('#item_table').DataTable();
} );





</script>   
@endpush
