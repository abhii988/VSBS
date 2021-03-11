<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
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
            <a class="nav-link" href="{{ route('home') }}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
    <br>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('service') }}">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Book Servicing</span>
            </a>
          </li>
    <br>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('centre') }}">
              <i class="ni ni-pin-3 text-primary"></i>
              <span class="nav-link-text">Service Centres</span>
            </a>
          </li>
    <br>
          <li class="nav-item">
      <a class="nav-link" href="{{ route('accessories') }}">
        <i class="ni ni-bullet-list-67 text-default"></i>
        <span class="nav-link-text">Accessories</span>
      </a>
          </li>  
    <br>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('profile') }}">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">Profile</span>
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