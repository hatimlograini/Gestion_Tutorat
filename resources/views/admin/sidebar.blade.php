<aside class="main-sidebar sidebar-dark-primary elevation-4">
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
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
          <a href="#" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Gestion
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('viewListerEtudiant') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Listes Etudiants</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('viewListerTuteur') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Listes Tuteurs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('viewListerSeance') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Listes Séance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Espaces Attestations</p>
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