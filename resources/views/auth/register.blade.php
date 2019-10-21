@extends('bett0')


@section('title') Usuario @endsection
@section('usuario') active @endsection
@section('descripcion') Nuevo usuario @endsection

@section('titulo')
  <h4> <i class="ti-user menu-icon"></i> Usuarios </h4>
@endsection

@section('boton')
<a href="{{asset('index.php/Usuario')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
@endsection



@section('cuerpo')
<form class="form-horizontal" method="POST" action="{{ route('registroPost') }}">
{{ csrf_field() }}



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

  <div class="row">
    <div class="col-md-12 col-xl-6">
      <button type="submit" class="btn btn-primary btn-icon-text" accesskey="g">
        <i class="ti-save menu-ico"></i> <u>G</u>uardar
      </button>
    </div>
  </div>
</form>
@endsection
