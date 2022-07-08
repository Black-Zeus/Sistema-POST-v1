<div class="sidebar" data-color="orange" data-background-color="white"
  data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      <img src="{{ asset('img') }}/logo.png"" class="LogoImage" />
      {{ env('APP_NAME') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav SideBar">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <!-- Secciones del Aplicativo  -->

      <!-- Ventas  -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ManagerVentas"
          aria-expanded="false">
          <i class="material-icons">receipt</i>
          <p>
            Ventas<b class="caret"></b>
          </p>
        </a>
        <div class="collapse dropdown-menu-open" id="ManagerVentas">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">trending_down</i>&nbsp&nbsp
                Mis Ventas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">loyalty</i>&nbsp&nbsp
                Generar Venta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">point_of_sale</i>&nbsp&nbsp
                Pagar Venta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">multiple_stop</i>&nbsp&nbsp
                Cambio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">settings_backup_restore</i>&nbsp&nbsp
                Devolucion
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Caja  -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ManagerCaja"
          aria-expanded="false">
          <i class="material-icons">attach_money</i>
          <p>
            Caja<b class="caret"></b>
          </p>
        </a>
        <div class="collapse dropdown-menu-open" id="ManagerCaja">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">monetization_on</i>&nbsp&nbsp
                Caja Chica
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">local_atm</i>&nbsp&nbsp
                Caja
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Productos  -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ManagerProducts"
          aria-expanded="false">
          <i class="material-icons">bento</i>
          <p>
            Productos<b class="caret"></b>
          </p>
        </a>
        <div class="collapse dropdown-menu-open" id="ManagerProducts">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">screen_search_desktop</i>&nbsp&nbsp
                Consultar
              </a>
            </li>
          </ul>
        </div>
      </li>

    </ul>
  </div>
</div>
