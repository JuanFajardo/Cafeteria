@extends('bett0')


@section('title') Proveedor @endsection
@section('proveedor') active @endsection
@section('descripcion') Administracion de los trabajos @endsection

@section('titulo')
  <h4> <i class="ti-id-badge menu-icon"></i> Proveedor </h4>
@endsection

@section('boton')
<a   href="#modalAgregar"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">

      <div class="modal-header panel-heading">
        <b>Insertar nuevo Proveedor</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="row">
          <div class="col-md-6">
            <label for="proveedor_" > <b><i>Proveedor</i></b> </label>
            {!! Form::text('proveedor', null, ['class'=>'form-control letras', 'placeholder'=>'Proveedor', 'id'=>'proveedor_', 'required']) !!}
          </div>
          <div class="col-md-3">
            <label for="rubro_" > <b><i>Rubro</i></b> </label>
            {!! Form::text('rubro', null, ['class'=>'form-control', 'placeholder'=>'Rubro', 'id'=>'rubro_']) !!}
          </div>
          <div class="col-md-3">
            <label for="entidad_" > <b><i>Entidad</i></b> </label>
            {!! Form::text('entidad', null, ['class'=>'form-control', 'placeholder'=>'Entidad', 'id'=>'entidad_']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="responsable_" > <b><i>Responsable o Encargado</i></b> </label>
            {!! Form::text('responsable', null, ['class'=>'form-control', 'placeholder'=>'Responsable o Encargado', 'id'=>'responsable_']) !!}
          </div>
          <div class="col-md-3">
            <label for="ciudad_" > <b><i>Ciudad</i></b> </label>
            {!! Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Ciudad', 'id'=>'ciudad_']) !!}
          </div>
          <div class="col-md-3">
            <label for="telefono_" > <b><i>Telefono o Celular</i></b> </label>
            {!! Form::text('telefono', null, ['class'=>'form-control numeros', 'placeholder'=>'Telefono o Celular', 'id'=>'telefono_', 'maxlength'=>'10']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="direccion_" > <b><i>Direccion</i></b> </label>
            {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion', 'id'=>'direccion_']) !!}
          </div>
          <div class="col-md-4">
            <label for="correo_" > <b><i>Correo Electronico</i></b> </label>
            {!! Form::email('correo', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico', 'id'=>'correo_']) !!}
          </div>
          <div class="col-md-4">
            <label for="nit_" > <b><i>NIT</i></b> </label>
            {!! Form::text('nit', null, ['class'=>'form-control', 'placeholder'=>'NIT', 'id'=>'nit_']) !!}
          </div>
        </div>

        <hr>

        {!! Form::hidden('id_usuario', '1') !!}
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@endsection

@section('modal2')
    <div id="modalModifiar" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content panel panel-warning ">

                <div class="modal-header panel-heading">
                    <b>Actualizar Proveedor</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Proveedor.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-6">
                        <label for="proveedor_" > <b><i>Proveedor</i></b> </label>
                        {!! Form::text('proveedor', null, ['class'=>'form-control letras', 'placeholder'=>'Proveedor', 'id'=>'proveedor', 'required']) !!}
                      </div>
                      <div class="col-md-3">
                        <label for="rubro_" > <b><i>Rubro</i></b> </label>
                        {!! Form::text('rubro', null, ['class'=>'form-control', 'placeholder'=>'Rubro', 'id'=>'rubro']) !!}
                      </div>
                      <div class="col-md-3">
                        <label for="entidad_" > <b><i>Entidad</i></b> </label>
                        {!! Form::text('entidad', null, ['class'=>'form-control', 'placeholder'=>'Entidad', 'id'=>'entidad']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="responsable_" > <b><i>Responsable o Encargado</i></b> </label>
                        {!! Form::text('responsable', null, ['class'=>'form-control', 'placeholder'=>'Responsable o Encargado', 'id'=>'responsable']) !!}
                      </div>
                      <div class="col-md-3">
                        <label for="ciudad_" > <b><i>Ciudad</i></b> </label>
                        {!! Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Ciudad', 'id'=>'ciudad']) !!}
                      </div>
                      <div class="col-md-3">
                        <label for="telefono_" > <b><i>Telefono o Celular</i></b> </label>
                        {!! Form::text('telefono', null, ['class'=>'form-control numeros', 'placeholder'=>'Telefono o Celular', 'id'=>'telefono', 'maxlength'=>'10']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="direccion_" > <b><i>Direccion</i></b> </label>
                        {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion', 'id'=>'direccion']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="correo_" > <b><i>Correo Electronico</i></b> </label>
                        {!! Form::email('correo', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico', 'id'=>'correo']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="nit_" > <b><i>NIT</i></b> </label>
                        {!! Form::text('nit', null, ['class'=>'form-control', 'placeholder'=>'NIT', 'id'=>'nit']) !!}
                      </div>
                    </div>

                    <hr>

                    {!! Form::hidden('id_usuario', '1') !!}

                    {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection


@section('cuerpo')
<table class="table table-hover compact" id="tabla">
  <thead style="background-color:#343a40; color:#fff;">
    <tr>
      <th>Id</th>
      <th>Proveedor</th>
      <th>Rubro</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{$dato->proveedor}}</td>
      <td>{{$dato->rubro}}</td>
      <td>{{$dato->direccion}}</td>
      <td>{{$dato->telefono}}</td>
      <td>
        <a href="#modalModifiar" data-toggle="modal" data-target="" class="actualizar btn btn-warning btn-icon-text" > <i class="ti-pencil menu-icon"></i> </a>
        <a href="#"  class="eliminar btn btn-danger btn-icon-text"> <i class="ti-na menu-icon"></i> </a>
      </td>
    </tr>
  @endforeach
  </tbody>
  <tfoot class="thead-dark">
    <tr>
      <th>Id</th>
      <th>Proveedor</th>
      <th>Rubro</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Acciones</th>
    </tr>
  </tfoot>
</table>
{!! Form::open(['route'=>['Proveedor.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
@endsection

@section('js')
<script type="text/javascript">
$(document).ready(function(){
  $('#tabla').DataTable({
    "order": [[ 0, 'desc']],
    "language": {
      "bDeferRender": true,
      "sEmtpyTable": "No ay registros",
      "decimal": ",",
      "thousands": ".",
      "lengthMenu": "Mostrar _MENU_ ",
      "zeroRecords": "No se encontro nada,  lo siento",
      "info": " ",
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

$('.nuevo').click(function(event){
  event.preventDefault();
  $('#form-insert').closest('form').find("input[type=text], textarea").val("");
});

$('.actualizar').click(function(event){
  event.preventDefault();
  var fila = $(this).parents('tr');
  var id = fila.data('id');
  var form = $('#form-update')
  var url = form.attr('action').replace(':DATO_ID', id);
  form.get(0).setAttribute('action', url);
  link  = '{{ asset("/index.php/Proveedor/")}}/'+id;
  $.getJSON(link, function(data, textStatus) {
    if(data.length > 0){
      $.each(data, function(index, el) {
        $('#proveedor').val(el.proveedor);
        $('#rubro').val(el.rubro);
        $('#entidad').val(el.entidad);
        $('#responsable').val(el.responsable);
        $('#ciudad').val(el.ciudad);
        $('#direccion').val(el.direccion);
        $('#telefono').val(el.telefono);
        $('#correo').val(el.correo);
        $('#nit').val(el.nit);
      });
    }
  });
});

$('.eliminar').click(function(event) {
  event.preventDefault();
  var fila = jQuery(this).parents('tr');
  var id = fila.data('id');
  var form = jQuery('#form-delete');
  var url = form.attr('action').replace(':DATO_ID',id);
  var data = form.serialize();

  if(confirm('Esta seguro de eliminar al Empleado')) {
    $.post(url, data, function(result, textStatus, xhr) {
      alert(result);
      fila.fadeOut();
    }).fail(function(esp){
      fila.show();
    });
  }
});

</script>
@endsection
