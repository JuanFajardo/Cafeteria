@extends('bett0')


@section('title') Empleado @endsection
@section('empleado') active @endsection

@section('titulo')
  <h4> <i class="ti-user menu-icon"></i> Empleados </h4>
 @endsection

@section('descripcion') Listado de los Empleados @endsection

@section('boton')
<a href="#modalAgregar"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">
      <div class="modal-header panel-heading">
        <b>Insertar nuevo Empleado</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="row">
          <div class="col-md-12">
            <label for="nombre_" > <b><i>Nombres Y Apellidos</i></b> </label>
            {!! Form::text('nombre', null, ['class'=>'form-control letras', 'placeholder'=>'Nombre', 'id'=>'nombre_']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="ci_" > <b><i>Documento</i></b> </label>
            {!! Form::text('ci', null, ['class'=>'form-control numeros', 'placeholder'=>'Documento', 'id'=>'ci_']) !!}
          </div>
          <div class="col-md-4">
            <label for="email_" > <b><i>Correo</i></b> </label>
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo', 'id'=>'email_']) !!}
          </div>
          <div class="col-md-4">
            <label for="telefono_" > <b><i>Telefono o Celular</i></b> </label>
            {!! Form::text('telefono', null, ['class'=>'form-control numeros', 'placeholder'=>'Telefono o Celular', 'id'=>'telefono_', 'maxlength'=>'10']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="fecha_nacimiento_" > <b><i>Fecha Nacimiento</i></b> </label>
            {!! Form::date('fecha_nacimiento', null, ['class'=>'form-control', 'placeholder'=>'Fecha Nacimiento', 'id'=>'fecha_nacimiento_']) !!}
          </div>
          <div class="col-md-4">
            <label for="zona_" > <b><i>Zona</i></b> </label>
            {!! Form::text('zona', null, ['class'=>'form-control', 'placeholder'=>'Zona', 'id'=>'zona_']) !!}
          </div>
          <div class="col-md-4">
            <label for="direccion_" > <b><i>Direccion</i></b> </label>
            {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion', 'id'=>'direccion_']) !!}
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
                    <b>Actualizar Empleado</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Empleado.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-12">
                        <label for="nombre_" > <b><i>Nombres Y Apellidos</i></b> </label>
                        {!! Form::text('nombre', null, ['class'=>'form-control letras', 'placeholder'=>'Nombre', 'id'=>'nombre']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="ci_" > <b><i>Documento</i></b> </label>
                        {!! Form::text('ci', null, ['class'=>'form-control numeros', 'placeholder'=>'Documento', 'id'=>'ci']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="email_" > <b><i>Correo</i></b> </label>
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo', 'id'=>'email']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="telefono_" > <b><i>Telefono o Celular</i></b> </label>
                        {!! Form::text('telefono', null, ['class'=>'form-control numeros', 'placeholder'=>'Telefono o Celular', 'id'=>'telefono', 'maxlength'=>'10']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="fecha_nacimiento_" > <b><i>Fecha Nacimiento</i></b> </label>
                        {!! Form::date('fecha_nacimiento', null, ['class'=>'form-control', 'placeholder'=>'Fecha Nacimiento', 'id'=>'fecha_nacimiento']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="zona_" > <b><i>Zona</i></b> </label>
                        {!! Form::text('zona', null, ['class'=>'form-control', 'placeholder'=>'Zona', 'id'=>'zona']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="direccion_" > <b><i>Direccion</i></b> </label>
                        {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion', 'id'=>'direccion']) !!}
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
<table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
  <thead style="background-color:#343a40; color:#fff;">
    <tr>
      <th>Id</th>
      <th>Nombres y Apellidos</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Documento</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{$dato->nombre}} {{$dato->paterno}}  {{$dato->materno}} </td>
      <td>{{$dato->direccion}}</td>
      <td>{{$dato->telefono}}</td>
      <td>{{$dato->ci}}</td>
      <td>
        <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar btn btn-warning btn-text-icon" > <i class="ti-pencil menu-icon"></i></a>
        <a href="#"  data-toggle="modal" data-target="" class="eliminar btn btn-danger btn-text-icon"> <i class=" ti-close menu-icon"></i></a>
      </td>
    </tr>
  @endforeach
  </tbody>
  <tfoot style="background-color:#343a40; color:#fff;">
    <tr>
      <th>Id</th>
      <th>Nombres y Apellidos</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Documento</th>
      <th>Acciones</th>
    </tr>
  </tfoot>
</table>
{!! Form::open(['route'=>['Empleado.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
@endsection

@section('js')
    <script type="text/javascript">

        jQuery(document).ready(function(){
            jQuery('#tablaAgenda').DataTable({
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

        jQuery('.nuevo').click(function(event){
          event.preventDefault();
          jQuery('#form-insert').closest('form').find("input[type=text], textarea").val("");
        });

        jQuery('.actualizar').click(function(event){
            event.preventDefault();
            var fila = jQuery(this).parents('tr');
            var id = fila.data('id');
            var form = jQuery('#form-update')
            var url = form.attr('action').replace(':DATO_ID', id);
            form.get(0).setAttribute('action', url);
            link  = '{{ asset("/index.php/Empleado/")}}/'+id;

            jQuery.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    jQuery.each(data, function(index, el) {
                      jQuery('#nombre').val(el.nombre);
                      jQuery('#paterno').val(el.paterno);
                      jQuery('#materno').val(el.materno);
                      jQuery('#ci').val(el.ci);
                      jQuery('#telefono').val(el.telefono);
                      jQuery('#email').val(el.email);
                      jQuery('#direccion').val(el.direccion);
                      jQuery('#zona').val(el.zona);
                      jQuery('#fecha_nacimiento').val(el.fecha_nacimiento);

                    });
                }else{
                    //
                }
            });
        });


        jQuery('.eliminar').click(function(event) {
            event.preventDefault();
            var fila = jQuery(this).parents('tr');
            var id = fila.data('id');
            var form = jQuery('#form-delete');
            var url = form.attr('action').replace(':DATO_ID',id);
            var data = form.serialize();

            if(confirm('Esta seguro de eliminar al Empleado'))
            {
                jQuery.post(url, data, function(result, textStatus, xhr) {
                    alert(result);
                    fila.fadeOut();
                }).fail(function(esp){
                    fila.show();
                });
            }
        });


    </script>
@endsection
