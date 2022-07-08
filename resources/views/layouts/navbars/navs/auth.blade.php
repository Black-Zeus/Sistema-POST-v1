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

    <div class="collapse navbar-collapse justify-content">
      <ul class="navbar-nav">

        <!-- Parametros  -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">build_circle</i>Parametros &nbsp
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <label class="SectionName">Caja Chica</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">cached</i>&nbsp&nbsp
              Tipo de Movimientos
            </a>
            <div class="dropdown-divider"> </div>
            <label class="SectionName">General</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">emoji_flags</i>&nbsp&nbsp
              Paises
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">location_city</i>&nbsp&nbsp
              Ciudades
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">all_inbox</i>&nbsp&nbsp
              Tipo Documento
            </a>
          </div>
        </li>

        <!-- Clientes / Proveedor  -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">nature_people</i>Clientes / Proveedor &nbsp
          </a>

          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <label class="SectionName">Clientes</label>

            <a class="dropdown-item" href="#">
              <i class="material-icons">face</i>&nbsp&nbsp
              Tipo Cliente
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">run_circle</i>&nbsp&nbsp
              Tipo Contactos
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">list_alt</i>&nbsp&nbsp
              Nomina
            </a>
            <div class="dropdown-divider">
            </div>
            <label class="SectionName">Proveedor</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">face</i>&nbsp&nbsp
              Tipo Proveedor
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">run_circle</i>&nbsp&nbsp
              Tipo Contactos
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">list_alt</i>&nbsp&nbsp
              Nomina
            </a>
          </div>
        </li>

        <!-- Administrador Productos  -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">bento</i>Productos &nbsp
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <label class="SectionName">Nomina</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">settings</i>&nbsp&nbsp
              Administracion
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">settings_system_daydream</i>&nbsp&nbsp
              Ajustes
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">swap_horiz</i>&nbsp&nbsp
              Transferencias
            </a>
            <div class="dropdown-divider"> </div>
            <label class="SectionName">Propiedades</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">family_restroom</i>&nbsp&nbsp
              Familias
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">groups</i>&nbsp&nbsp
              Grupo / Subgrupos
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">qr_code</i>&nbsp&nbsp
              Lotes
            </a>
            <div class="dropdown-divider"> </div>
            <label class="SectionName">Lista de precios</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">attach_money</i>&nbsp&nbsp
              Vigentes
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">monitor</i>&nbsp&nbsp
              Administrar
            </a>
          </div>
        </li>

        <!-- Reportes  -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="material-icons">auto_graph</i>Reportes &nbsp
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <label class="SectionName">Ventas</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">leaderboard</i>&nbsp&nbsp
              Por Rango
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">leaderboard</i>&nbsp&nbsp
              Por Clientes
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">leaderboard</i>&nbsp&nbsp
              Por Local
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">leaderboard</i>&nbsp&nbsp
              Libro de Ventas
            </a>
            <div class="dropdown-divider"> </div>
            <label class="SectionName">Compras</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">shopping_basket</i>&nbsp&nbsp
              Por Rango
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">shopping_basket</i>&nbsp&nbsp
              Por Clientes
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">shopping_basket</i>&nbsp&nbsp
              Por Local
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">shopping_basket</i>&nbsp&nbsp
              Libro de Ventas
            </a>
            <div class="dropdown-divider"> </div>
            <label class="SectionName">Caja</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">attach_money</i>&nbsp&nbsp
              Registro Caja
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">attach_money</i>&nbsp&nbsp
              Caja Chica
            </a>
          </div>
        </li>

        <!-- Movimientos  -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="material-icons">multiple_stop</i>Movimientos &nbsp
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <label class="SectionName">Inventario</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">production_quantity_limits</i>&nbsp&nbsp
              Producto
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">query_stats</i>&nbsp&nbsp
              Stock Critico
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">bar_chart</i>&nbsp&nbsp
              Ranking Producto Vta.
            </a>
            <div class="dropdown-divider"> </div>
          </div>
        </li>

      </ul>
    </div>

    <div class="collapse navbar-collapse justify-content-end">
      @if (1 == 2)
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control"
              placeholder="{{ __('Search...') }}">
            <button type="submit"
              class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
      @endif
      <ul class="navbar-nav NavBar">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile"
            data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ Auth::user()->name }}&nbsp
            <i class="material-icons">supervised_user_circle</i>
            <p class="d-lg-none d-md-block"> {{ __('Account') }} </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdownProfile">
            <label class="SectionName">{{ Auth::user()->name }}</label>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
              <i class="material-icons">person</i>&nbsp&nbsp
              {{ __('Profile') }}
            </a>
            <label class="SectionName">Usuarios</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">app_settings_alt</i>&nbsp&nbsp
              {{ __('User Management') }}
            </a>
            <div class="dropdown-divider"> </div>
            <label class="SectionName">Roles y Permisos</label>
            <a class="dropdown-item" href="#">
              <i class="material-icons">supervisor_account</i>&nbsp&nbsp
              Roles
            </a>
            <a class="dropdown-item" href="#">
              <i class="material-icons">perm_identity</i>&nbsp&nbsp
              Permisos
            </a>
            <div class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="material-icons">logout</i>&nbsp&nbsp
              {{ __('Log out') }}
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
