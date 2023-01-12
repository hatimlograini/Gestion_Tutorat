<aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-color: #B7037E">
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">

          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Bonjour 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('view_proposition') }}" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>voir proposition</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="view_inscription" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Voir mes inscription</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="proposition" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Faire une Proposition</p>
                  </a>
                </li>

              </ul>
            </li>


            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
