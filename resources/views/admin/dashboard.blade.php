@extends('layouts.app')

@section('titel', 'dashboard')
    
 


@section('content')

<div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Category</p>
              <h3 class="card-title">{{$category->count()}}
                
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-warning"> </i>
                <a href="#pablo" class="warning-link">Number of Categories</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Item</p>
              <h3 class="card-title">{{$item->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons"></i> Number of Items
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Slider</p>
              <h3 class="card-title">{{$slide->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons"> </i> Number of Slide
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Reservations</p>
              <h3 class="card-title">{{$reserve->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons"></i> Number of Reservations 
              </div>
            </div>
          </div>
        </div>
      </div>

<h1>hello</h1>
    
@endsection