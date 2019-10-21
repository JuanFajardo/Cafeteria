
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>G.A.M.P. - @yield('title')</title>
  {!! app('html')->style('/public/assets/vendors/ti-icons/css/themify-icons.css') !!}
  {!! app('html')->style('/public/assets/vendors/base/vendor.bundle.base.css') !!}
  {!! app('html')->style('/public/assets/vendros/dataTables/dataTables.bootstrap.css') !!}
  {!! app('html')->style('/public/assets/css/style.css') !!}
  <link rel="shortcut icon" href="{{ asset('/public/assets/images/escudogmp.jpg') }}" />
</head>
<body>
  <div class="container-scroller">
   <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="content-wrapper d-flex align-items-center auth px-0">
       <div class="row w-100 mx-0">
         <div class="col-lg-4 mx-auto">
           <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             <div class="brand-logo">
               <img src="{{ asset('/public/assets/images/logo.png') }}" alt="logo">
             </div>
             <h4>Cafeteria Reposteria Baraca </h4>
             <h6 class="font-weight-light">Inicie session para continuar.</h6>
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}

               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control  form-control-lg" name="name" value="{{ old('name') }}"  placeholder="Usuario" required autofocus>
               </div>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 <input id="password" type="password" class="form-control form-control-lg" name="password" required placeholder="Contraseña">
                 @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
               </div>

               <div class="mt-3">
                 <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn btn-icon-text">
                   <i class="ti-user menu-icon"></i> Ingresar
                 </button>
               </div>

             </form>
           </div>
         </div>
       </div>
     </div>
     <!-- content-wrapper ends -->
   </div>
   <!-- page-body-wrapper ends -->
 </div>

  {!! app('html')->script('/public/assets/vendors/base/vendor.bundle.base.js') !!}
  {!! app('html')->script('/public/assets/vendors/chart.js/Chart.min.js') !!}

  {!! app('html')->script('/public/assets/vendors/dataTables/jquery.dataTables.js') !!}
  {!! app('html')->script('/public/assets/vendors/dataTables/dataTables.bootstrap.js') !!}

  {!! app('html')->script('/public/assets/js/off-canvas.js') !!}
  {!! app('html')->script('/public/assets/js/hoverable-collapse.js') !!}
  {!! app('html')->script('/public/assets/js/template.js') !!}
  {!! app('html')->script('/public/assets/js/todolist.js') !!}
  {!! app('html')->script('/public/assets/js/dashboard.js') !!}


</body>
</html>
