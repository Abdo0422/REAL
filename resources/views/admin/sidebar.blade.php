<div class="row p-0 m-0 proBanner" id="proBanner">
</div>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo"  href="{{ url('/redirect') }}"><img src="admin/assets/images/logo.png" height="50px" alt="logo"/></a>
    <a class="sidebar-brand brand-logo-mini"  href="{{ url('/redirect') }}"><img src="admin/assets/images/logomini.png" height="50px" alt="logo" /></a>
  </div>
  <ul class="nav" style="  position: fixed;
z-index: 1;">
    <li class="nav-item profile">

    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/redirect')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{url('/view_product')}}">Add Product</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/show_product')}}">Show Product</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('view_categories')}}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Categories</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('view_orders')}}">
        <span class="menu-icon">
        <img src="admin/assets/images/purchase.png" width="20px" alt="logo" />
        </span>
        <span class="menu-title">Orders</span>
      </a>
    </li>

  </ul>
</nav>
