<!-- Navbar -->
<nav
  class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
      aria-controls="navigation-index" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        <div class="input-group no-border">
          <input type="text" value="" class="form-control"
            placeholder="Search...">
          <button type="submit" class="btn btn-white btn-round btn-just-icon">
            <i class="material-icons">search</i>
            <div class="ripple-container"></div>
          </button>
        </div>
      </form>
      <ul class="navbar-nav">
        <!-- Seccion Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarMenu_settings"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i
              class="material-icons">settings</i><strong>Administración</strong>
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarMenu_settings">
            <a class="dropdown-item" href="#">Usuarios</a>
            <a class="dropdown-item" href="#">Roles y Permisos</a>
            <div class="dropdown-divider"></div>

          </div>
        </li>
        <!-- Fin Seccion Menu -->

        <!-- Seccion User Actions -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item"
              href="{{ route('profile.edit') }}">{{ __('Profile') }}
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}
            </a>
          </div>
        </li>
        <!-- Fin Seccion User Actions -->
      </ul>
    </div>
  </div>
</nav>
