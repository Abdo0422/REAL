<div class="container-fluid page-body-wrapper">
    <nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="{{ url('/redirect') }}"><img src="admin/assets/images/logo.png" alt="logo" height="100px"/></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search"method="GET" action="{{url('/show_your_order')}}" role="search">
          @csrf
          <input id="in" type="text" class="form-control" name="search" placeholder="Search...">
          </form>
        </li>
      </ul>
<div style="margin-top:10px">
          <x-app-layout>
        </x-app-layout>
</div>
    </div>
  </nav>
