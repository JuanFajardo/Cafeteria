@extends('bett0')


@section('title') Usuario @endsection
@section('Usuario') active @endsection
@section('descripcion') Administracion de los usuario @endsection

@section('titulo')
  <h4> <i class="ti-user menu-icon"></i> Usuarios </h4>
@endsection

@section('boton')
<a   href="{{asset('/index.php/Registro')}}"  class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('cuerpo')
<table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
  <thead style="background-color:#343a40; color:#fff;">
    <tr>
      <th>Id</th>
      <th>Usuario</th>
      <th>Nombres y Apellidos</th>
      <th>Direccion / Telefono</th>
      <th>Grupo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{$dato->name}} </td>
      <td>{{$dato->nombre}}</td>
      <td>{{$dato->direccion}} {{$dato->telefono}} </td>
      <td>
      @if($dato->grupo == "1" )
        Adminsitrador
      @elseif($dato->grupo == "2" )
        Cocina
      @elseif($dato->grupo == "3" )
        Reporte
      @endif
      </td>
      <td>
        <a href="{{asset('index.php/Editar/'.$dato->id)}}" class="btn btn-warning btn-icon-text" > <i class="ti-pencil menu-icon"></i> </a>
      </td>
    </tr>
  @endforeach
  <tfoot class="thead-dark">
    <tr>
      <th>Id</th>
      <th>Usuario</th>
      <th>Nombres y Apellidos</th>
      <th>Direccion / Telefono</th>
      <th>Grupo</th>
      <th>Acciones</th>
    </tr>
  </tfoot>
</table>
  {!! Form::open(['route'=>['Empleado.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
  {!! Form::close() !!}
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaAgenda').DataTable({
      "order": [[ 0, 'desc']],
      "language": {
        "bDeferRender": true,
        "sEmtpyTable": "No ay registros",
        "decimal": ",",
        "thousands": ".",
        "lengthMenu": "Mostrar _MENU_ datos por registros",
        "zeroRecords": "No se encontro nada,  lo siento",
        "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
        "infoEmpty": "No ay entradas permitidas",
        "search": "Buscar ",
        "infoFiltered": "(Busqueda de _MAX_ registros en total)",
        "oPaginate":{
          "sLast":"Final",
          "sFirst":"Principio",
          "sNext":"Siguiente",
          "sPrevious":"Anterior"
        }
      }
    });
  });
</script>
@endsection
