<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <!-- User Button -->
    <a class="navbar-toggler btn btn-blue" href="#" id="user-button">
      <i class="fa fa-user" id="user-icon"></i>
    </a>
    <!-- Banner Button -->
    <a id="banner" href="#"><h2>Moviigniter</h2></a>
    <!-- Logout Button -->
    <a class="navbar-toggler btn btn-red" href="#" id="logout-button">
      <i class="fa fa-sign-out" id="logout-icon"></i>
    </a>
    <!-- Collapse Menu -->
    <div class="collapse navbar-collapse" id="user-navbar">
      <ul class="navbar-nav ml-auto">
        <!-- User Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pr-0" id="navbar-dropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Administrator </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown">
            <a class="dropdown-item" href="#"><i class="fa fa-user"></i>&emsp;Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i>&ensp;&nbsp;Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>