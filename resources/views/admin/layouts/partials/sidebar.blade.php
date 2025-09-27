<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">JEM30</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
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
    
    <li class="nav-item">
      <a href="{{ route('admin.dashboard') }}" class="nav-link">
        <i class="nav-icon far fa-clipboard"></i> 
        <p>Dashboard</p>
      </a>
    </li>

    <li class="nav-item"> 
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-circle"></i> 
        <p>
          Super Agent Details
          <i class="right fas fa-angle-down"></i> 
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.agent.list') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Agent Master</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.client.list') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Client Master</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tags"></i> 
        <p>
          Sports Betting
          <i class="right fas fa-angle-up"></i> 
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('admin.sports.active_games')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Active Games</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.sports.finished_games')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Finished Games</p>
            </a>
          </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-compass"></i> 
        <p>
          Casino
          <i class="right fas fa-angle-down"></i> 
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Inplay Casino</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Completed Casino</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.casino.details') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Casino Details</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-compass"></i> 
        <p>
          Matka
          <i class="right fas fa-angle-down"></i>
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i> 
        <p>
          Ledger
          <i class="right fas fa-angle-down"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Profit/Loss</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>My Ledger</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Agent Ledger</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Client Ledger</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item menu-open">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wallet"></i> <p>
                Cash Transaction
                <i class="right fas fa-angle-up"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(C) Debit/Credit Entry</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(A) Debit/Credit Entry</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i> <p>Comm. Report</p>
        </a>
    </li>

    <li class="nav-item menu-open">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i> <p>
                Reports
                <i class="right fas fa-angle-up"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login Report</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Secure Code Report</p>
                </a>
            </li>
        </ul>
    </li>
    
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i> <p>JEM29 Setting</p>
        </a>
    </li>
    
  </ul>
</nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>