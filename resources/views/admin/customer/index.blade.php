@extends('layouts.app')

@section('titel','Reservation')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   
@endpush
@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">

                
                <p class="card-category">  </p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="item_table">
        <thead>
            
            <tr>
                <th>#</th>
                <th width="220px"  style="text-align:center">name</th>
                <th width="220px"  style="text-align:center">address</th>
                <th width="220px"  style="text-align:center">phone</th>
                <th width="220px"  style="text-align:center">shipping address</th>
                <th width="220px"  style="text-align:center">shipping cost</th>
                <th width="220px"  style="text-align:center">total cost</th>
                <th width="220px"  style="text-align:center">status</th>
                
                <th width="220px"  style="text-align:center">time</th>
               
                <th>Action</th>
    
            </tr>
        </thead>
        <tbody>
@foreach ($customers as $item)
     
                <tr>
                        <td>#</td>
                        <td style="text-align:center">{{$item->name}}</td>
                        <td style="text-align:center">{{$item->address }}</td>
                        
                        <td style="text-align:center">{{$item->mobile_no}}</td>
                        
                        <td style="text-align:center">{{$item->shipping_address}}</td>
                        <td style="text-align:center">{{$item->shipping_cost}}</td>
                        <td style="text-align:center">{{$item->total}}</td>
                        <td style="text-align:center">
                            @if ($item->status=='1')
                                <p><i class="material-icons">
                                        done_all
                                        </i></p>
                            @else
                                <p><i class="material-icons">
                                        arrow_right_alt
                                        </i></p>
                            @endif
                        </td>
                       
                        <td style="text-align:center">{{$item->created_at }}</td>
                        
                        <td>
                             
                            <form id="update-form-{{ $item->id }}" action="{{ route('customer.edit',$item->id) }}" style="display: none;" method="GET">
                                @csrf
                                 
                            </form>
                            <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('update-form-{{ $item->id }}').submit();
                            }else {
                                event.preventDefault();
                                    }"><i class="material-icons">done</i></button>
                           

         
                             
                            <form id="delete-form-{{ $item->id }}" action="{{ route('customer.destroy',$item->id) }}" style="display: none;" method="POST">
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

 
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript">
    $(document).ready(function() {
    $('#item_table').DataTable();
} );
</script>   
@endpush
