         <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">

      <div class="logo">
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
          Simple Restaurant
        </a>
      </div>



            <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}  ">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li> 
 

          <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }} ">
              <a class="nav-link" href="{{ route('category.index') }}">
                <i class="material-icons">content_paste</i>
                <p>Category</p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/item*') ? 'active' : '' }}  ">
              <a class="nav-link" href="{{ route('item.index') }}">
                <i class="material-icons">content_paste</i>
                <p>Item List</p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/reserve*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('reserve.index') }}">
                <i class="material-icons">library_books</i>
                <p>Reservation</p>
              </a>
            </li>
             <li class="nav-item {{ Request::is('admin/slide*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('slide.index') }}">
                <i class="material-icons">library_books</i>
                <p>Slide show</p>
              </a>
            </li>
           
          
          <!-- your sidebar here -->
        </ul>
      </div>

    </div>











