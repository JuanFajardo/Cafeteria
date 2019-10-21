@extends('bett0')


@section('title') Usuario @endsection
@section('Usuario') active @endsection
@section('descripcion') Editar datos del usuario @endsection

@section('titulo')
  <h4> <i class="ti-user menu-icon"></i> Usuarios </h4>
@endsection

@section('boton')
<a href="{{asset('index.php/Usuario')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
<a   href="{{asset('/index.php/Registro')}}"  class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('cuerpo')
{!! Form::model($user, ['action'=>['UsuarioController@editarPost', $user->id], 'method'=>'PATCH', 'id'=>'form-create', 'class'=>'form-horizontal', 'role'=>'form', 'autocomplete'=>'off'  ])!!}
{!! Form::hidden('id', null, ['id'=>'id', 'class'=>'form-control']) !!}
<h4>Datos de usuario</h4>
<hr>

<div class="row">
  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="nombre" class="col-md-4 control-label">Nombres Y Apellidos</label>
    <div class="">
      <input id="" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
    </div>
  </div>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="name" class="col-md-4 control-label"> Usuario </label>
    <div class="">
      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
      @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="direccion" class="col-md-4 control-label">Direccion</label>
    <div class="">
      <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" >
    </div>
  </div>
  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="telefono" class="col-md-4 control-label"> Telefono/Celular </label>
    <div class="">
      <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" >
      @if ($errors->has('telefono'))
      <span class="help-block">
        <strong>{{ $errors->first('telefono') }}</strong>
      </span>
      @endif
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="grupo" class="col-md-4 control-label">Grupo de usuario</label>
    <div class="">
      {!! Form::select('grupo', ['1'=>'Administrador', '2'=>'Usuario', '3'=>'Mesero', '4'=>'Reporte'], null, ['id'=>'grupo', 'placeholder'=>'', 'class'=>'form-control', 'required']) !!}
    </div>
  </div>

  <div class="form-group{{ $errors->has('id_sucursal') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="id_sucursal" class="col-md-4 control-label"> Sucursal </label>
    <div class="">
      {!! Form::select('id_sucursal', \App\Sucursal::pluck('sucursal', 'id'), null, ['id'=>'id_sucursal', 'placeholder'=>'', 'class'=>'form-control', 'required']) !!}
    </div>
  </div>

</div>

<div class="row">
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="password" class="col-md-4 control-label">Contraseña</label>
    <input id="password" type="password" class="form-control" name="password" required>
    @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>
  <div class="form-group col-md-12 col-xl-6">
    <label for="password-confirm" class="col-md-4 control-label">Confirar Contraseña</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
  </div>
</div>

<!-----------------------------------------------------------------------><!----------------------------------------------------------------------->
<!-----------------------------------------------------------------------><!----------------------------------------------------------------------->
<!-----------------------------------------------------------------------><!----------------------------------------------------------------------->

  <div class="row">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12 col-xl-6">
      <label for="name" class="col-md-4 control-label">Usuario</label>
      {!! Form::text('name',  old('name'), ['id'=>'name', 'class'=>'form-control', 'placeholder'=>'nombreapellido']) !!}
      @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
      @endif
    </div>
    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }} col-md-12 col-xl-6">
      <label for="nombre" class="col-md-4 control-label">Nombres y Apellidos</label>
      {!! Form::text('nombre',  old('nombre'), ['id'=>'nombre', 'class'=>'form-control', 'placeholder'=>'Nombres y Apellidos']) !!}
      @if ($errors->has('nombre'))
        <span class="help-block">{{ $errors->first('nombre') }}</span>
      @endif
    </div>
  </div>

                  <div class="row">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12 col-xl-6">
                      <label for="password" class="col-md-4 control-label">Contraseña</label>
                      {!! Form::password('password', ['id'=>'password', 'class'=>'form-control', 'placeholder'=>'Clave s3cr3t4']) !!}
                      @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                    <div class="form-group col-md-12 col-xl-6">
                        <label for="grupo" class="col-md-4 control-label">Grupo</label>
                        {!! Form::select('grupo', ['Administrador'=>'Administrador', 'Encargado'=>'Encargado', 'Usuario'=>'Usuario'], null, ['id'=>'grupo', 'class'=>'form-control']) !!}
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 col-xl-6">
                      <button type="submit" class="btn btn-warning btn-icon-text ">
                        <i class="ti-pencil-alt menu-icon"></i> Actualizar
                      </button>
                    </div>
                    <div class="col-md-6 col-xl-6">
                      <a href="{{asset('/index.php/usuarios')}}" class="btn btn-primary btn-icon-text">
                        <i class="ti-close menu-icon"></i> Cancelar</a>
                    </div>
                  </div>
          {!! Form::close() !!}
@endsection


@section('js')
  <script type="text/javascript">

  function cerrar(id){

    link  = '{{ asset("/index.php/Encargado/Eliminar/")}}/'+id;
    var salud = $("#encargado"+id);
    salud.fadeOut();
    $.getJSON(link, function(data, textStatus) {
    });

  }

    $('#agregar').click(function(event){
      event.preventDefault();
      var centro_salud = $('#salud').val();
      var id = $('#id').val();
      var centrosSalud = $('#centrosSalud').html("");
      var html = "";
      link  = '{{ asset("/index.php/Encargado/Agregar/")}}/'+centro_salud+"|"+id;
      $.getJSON(link, function(data, textStatus) {
        if(data.length > 0){

          $.each(data, function(index, el) {
            if(!el.error){
              console.log(el.id+" "+ el.centro_salud)
              html = html + '<p class="badge badge-danger" id="encargado'+el.id+'">  '+el.centro_salud+'   <b onclick="cerrar(\''+el.id+'\')" style="color:white;"><i class="ti-close menu-icon"></i> </b> </p>';
              centrosSalud.html(html);
            }
          });
        }
      });
    });
  </script>
@endsection
