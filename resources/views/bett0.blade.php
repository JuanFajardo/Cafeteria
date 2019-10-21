<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  {!! app('html')->style('/public/assets/vendors/ti-icons/css/themify-icons.css') !!}
  {!! app('html')->style('/public/assets/vendors/base/vendor.bundle.base.css') !!}
  {!! app('html')->style('/public/assets/vendors/dataTables/dataTables.bootstrap.css') !!}
  {!! app('html')->style('/public/assets/css/style.css') !!}
  <link rel="shortcut icon" href="{{ asset('/public/assets/images/escudogmp.jpg') }}" />
  <style media="screen">
    .current{
      padding: 6px 12px;
      background-color: : #fff !important;
      border-color: #343a40 !important;
      color: #343a40;
      text-decoration: none;
      border: 1px solid #ddd;
    }
    .paginate_button{
      padding: 6px 12px;
      background: #343a40 !important;
      border-color: #fff !important;
      color: #fff;
      text-decoration: none;
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{ asset('/public/assets/images/logo.png') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('/public/assets/images/logo-mini.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        </ul>

        <h4>Cafeteria Resposteria Caroo</h4>
        @include('profile')
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('menu')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0"> @yield('titulo') </h4>
                  @yield('descripcion')
                </div>
                <div>
                  @yield('boton')
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            @yield('listado')
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  @yield('cuerpo')
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> 2019 <a href="http://www.bett0.tecnologia.bo/" target="_blank"> Bett0 - Tecnologia</a>. </span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  @yield('modal1')
  @yield('modal2')
  @yield('modal3')
  @yield('modal4')

  {!! app('html')->script('/public/assets/vendors/base/vendor.bundle.base.js') !!}
  {!! app('html')->script('/public/assets/vendors/chart.js/Chart.min.js') !!}
  {!! app('html')->script('/public/assets/vendors/dataTables/jquery.dataTables.js') !!}
  {!! app('html')->script('/public/assets/js/off-canvas.js') !!}
  {!! app('html')->script('/public/assets/js/hoverable-collapse.js') !!}
  {!! app('html')->script('/public/assets/js/template.js') !!}
  {!! app('html')->script('/public/assets/js/todolist.js') !!}
  {!! app('html')->script('/public/assets/js/dashboard.js') !!}
  @yield('js')

</body>
</html>
