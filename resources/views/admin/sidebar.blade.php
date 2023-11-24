<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="admin/img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features 
    </div>
    <li class="nav-item">
      <a class="nav-link" href="#ui-basic" data-toggle="collapse" data-toggle="collapse"
        aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
        <span class="menu-title">Products</span>
        <li class="menu-arrow"></li>
      </a>
      <div id="ui-basic" class="collapse">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="
            {{url('view_product')}}">
            Add Products</a></li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/show_product')}}">
            Show Product</a>
          </li>

        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('view_catagory')}}">
        <span class="menu-icon">
        <i class="fab fa-fw fa-wpforms"></i>
      </span>
        <span class="menu-title">Catagoris</span>
      </a>
    </li>
  </ul>