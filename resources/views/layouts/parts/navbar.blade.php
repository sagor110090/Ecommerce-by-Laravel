<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">perm_identity</i>
                  
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="{{ route('logout') }}"

   onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">
                  <i class="material-icons">
                          exit_to_app
                          </i>
                    <p class="d-lg-none d-md-block">
                      logout
                    </p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                        {{ csrf_field() }}
                    </form>  
                  </a>
                  
                </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>