<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <li class="nav-item @yield('inicio')">
      <a class="nav-link" href="{{ asset('/index.php') }}"> <i class="ti-home menu-icon"></i> <span class="menu-title" >Inicio</span> </a>
    </li>
    <li class="nav-item @yield('dosificacion')">
      <a class="nav-link" href="{{ asset('/index.php/Dosificacion') }}"> <i class="ti-medall menu-icon"></i> <span class="menu-title" accesskey="d"><u>D</u>osificacion</span> </a>
    </li>

    <li class="nav-item @yield('factura')">
      <a class="nav-link" href="{{ asset('/index.php/Facturas') }}"> <i class="ti-home menu-icon"></i> <span class="menu-title" accesskey="f"><u>F</u>actura</span> </a>
    </li>

    <li class="nav-item @yield('pedido')">
      <a class="nav-link" href="{{ asset('/index.php/Pedido') }}"> <i class="ti-home menu-icon"></i> <span class="menu-title" accesskey="p"><u>P</u>edido</span> </a>
    </li>
    <li class="nav-item @yield('preparado')">
      <a class="nav-link" href="{{ asset('/index.php/Preparado') }}"> <i class="ti-home menu-icon"></i> <span class="menu-title" accesskey="p"><u>P</u>reparado</span> </a>
    </li>
    <li class="nav-item @yield('menu')">
      <a class="nav-link" href="{{ asset('/index.php/Menu') }}"> <i class="ti-home menu-icon"></i> <span class="menu-title" accesskey="m"><u>M</u>enu</span> </a>
    </li>
    <li class="nav-item @yield('bien')">
      <a class="nav-link" href="{{ asset('/index.php/Bien') }}"> <i class="ti-bookmark-alt menu-icon"></i> <span class="menu-title" accesskey="b"><u>B</u>ien</span> </a>
    </li>
    <li class="nav-item @yield('cliente')">
      <a class="nav-link" href="{{ asset('/index.php/Cliente') }}"> <i class="ti-face-smile menu-icon"></i> <span class="menu-title" accesskey="c"><u>C</u>liente</span> </a>
    </li>
    <li class="nav-item @yield('empleado')">
      <a class="nav-link" href="{{ asset('/index.php/Empleado') }}"> <i class="ti-user menu-icon"></i> <span class="menu-title" accesskey="e"><u>E</u>mpleado</span> </a>
    </li>
    <li class="nav-item @yield('inventario')">
      <a class="nav-link" href="{{ asset('/index.php/Inventario') }}"> <i class="ti-layers-alt menu-icon"></i> <span class="menu-title" accesskey="i"><u>I</u>nventario</span> </a>
    </li>
    <li class="nav-item @yield('proveedor')">
      <a class="nav-link" href="{{ asset('/index.php/Proveedor') }}"> <i class="ti-id-badge menu-icon"></i> <span class="menu-title" accesskey="p"><u>P</u>roveedor</span> </a>
    </li>
    <li class="nav-item @yield('sucursal')">
      <a class="nav-link" href="{{ asset('/index.php/Sucursal') }}"> <i class="ti-shopping-cart menu-icon"></i> <span class="menu-title" accesskey="s"><u>S</u>ucursal</span> </a>
    </li>
    <li class="nav-item @yield('Reporte')">
      <a class="nav-link" href="{{ asset('/index.php/Reporte') }}"> <i class="ti-home menu-icon"></i> <span class="menu-title" accesskey="Reporte"><u>R</u>eporte</span> </a>
    </li>
    <li class="nav-item @yield('usuario')">
      <a class="nav-link" href="{{ asset('/index.php/Usuario') }}"> <i class="ti-user menu-icon"></i> <span class="menu-title" accesskey="u"><u>U</u>suario</span> </a>
    </li>

  </ul>
</nav>
