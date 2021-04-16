<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
        <img src="img/logo.png" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <br>
    <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
      {{-- <a class="nav-link active" href="{{ route('admin.home') }}"> --}}
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
    <br>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.service') }}">
      {{-- <a class="nav-link" href="{{ route('admin.service') }}"> --}}
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Manage Servicing</span>
            </a>
          </li>
    <br>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.accessories.index') }}">
                {{-- <a class="nav-link" href="{{ route('admin.service') }}"> --}}
                <i class="ni ni-cart text-black"></i>
                <span class="nav-link-text">Manage Accessories</span>
            </a>
        </li>
        <br>
    <li class="nav-item">
      <a class="nav-link active" href="{{ route('admin.users') }}">
      {{-- <a class="nav-link" href="{{ route('admin.users') }}"> --}}
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">Users</span>
      </a>
    </li>
    <br>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="ni ni-user-run text-default"></i>
              <span class="nav-link-text ">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
