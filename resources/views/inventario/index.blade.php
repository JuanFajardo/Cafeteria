@extends('bett0')


@section('title') Inventario @endsection
@section('inventario') active @endsection

@section('titulo')
  <h4> <i class=" ti-layers-alt menu-icon"></i> Inventarios </h4>
 @endsection

@section('descripcion') Listado de los bienes de uso en las cafeteria @endsection

@section('boton')
<a href="#modalAgregar"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">

      <div class="modal-header panel-heading">
        <b>Insertar nuevo Inventario</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="row">
          <div class="col-md-4">
            <label for="inventario_" > <b><i>Articulo</i></b> </label>
            {!! Form::text('inventario', null, ['class'=>'form-control letras', 'placeholder'=>'Articulo', 'id'=>'inventario_', 'required']) !!}
          </div>
          <div class="col-md-2">
            <label for="cantidad_" > <b><i>Cantidad</i></b> </label>
            {!! Form::text('cantidad', null, ['class'=>'form-control numeros', 'placeholder'=>'Entidad', 'id'=>'cantidad_', 'required']) !!}
          </div>
          <div class="col-md-3">
            <label for="lugar_" > <b><i>Lugar</i></b> </label>
            {!! Form::text('lugar', null, ['class'=>'form-control', 'placeholder'=>'Lugar', 'id'=>'lugar_', 'required']) !!}
          </div>
          <div class="col-md-2">
            <label for="tipo_" > <b><i>Tipo</i></b> </label>
            {!! Form::select('tipo', ['USO'=>'USO', 'BAJA'=>'DE BAJA' ], null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'tipo_', 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <label for="fecha_uso_" > <b><i>F. de USO</i></b> </label>
            {!! Form::text('fecha_uso', null, ['class'=>'form-control', 'placeholder'=>'Fecha de USO ', 'id'=>'fecha_uso_', 'readonly']) !!}
          </div>
          <div class="col-md-2">
            <label for="fecha_baja_" > <b><i>F. de BAJA</i></b> </label>
            {!! Form::text('fecha_baja', null, ['class'=>'form-control', 'placeholder'=>'Fecha de BAJA', 'id'=>'fecha_baja_', 'readonly']) !!}
          </div>
          <div class="col-md-8">
            <label for="observacion_" > <b><i>Observacion</i></b> </label>
            {!! Form::text('observacion', null, ['class'=>'form-control', 'placeholder'=>'Observacion', 'id'=>'observacion_']) !!}
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
                    <b>Actualizar Inventario</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Inventario.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-4">
                        <label for="inventario_" > <b><i>Articulo</i></b> </label>
                        {!! Form::text('inventario', null, ['class'=>'form-control letras', 'placeholder'=>'Articulo', 'id'=>'inventario', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="cantidad_" > <b><i>Cantidad</i></b> </label>
                        {!! Form::text('cantidad', null, ['class'=>'form-control numeros', 'placeholder'=>'Entidad', 'id'=>'cantidad', 'required']) !!}
                      </div>
                      <div class="col-md-3">
                        <label for="lugar_" > <b><i>Lugar</i></b> </label>
                        {!! Form::text('lugar', null, ['class'=>'form-control', 'placeholder'=>'Lugar', 'id'=>'lugar', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="tipo_" > <b><i>Tipo</i></b> </label>
                        {!! Form::select('tipo', ['USO'=>'USO', 'BAJA'=>'DE BAJA' ], null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'tipo', 'required']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2">
                        <label for="fecha_uso_" > <b><i>F. de USO</i></b> </label>
                        {!! Form::text('fecha_uso', null, ['class'=>'form-control', 'placeholder'=>'Fecha de USO ', 'id'=>'fecha_uso', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="fecha_baja_" > <b><i>F. de BAJA</i></b> </label>
                        {!! Form::text('fecha_baja', null, ['class'=>'form-control', 'placeholder'=>'Fecha de BAJA', 'id'=>'fecha_baja', 'readonly']) !!}
                      </div>
                      <div class="col-md-8">
                        <label for="observacion_" > <b><i>Observacion</i></b> </label>
                        {!! Form::text('observacion', null, ['class'=>'form-control', 'placeholder'=>'Observacion', 'id'=>'observacion']) !!}
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
      <th>Articulo</th>
      <th>Lugar</th>
      <th>Fecha USO</th>
      <th>Fecha BAJA</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{$dato->inventario}}</td>
      <td>{{$dato->lugar}}</td>
      <td>{{$dato->fecha_uso}}</td>
      <td>{{$dato->fecha_baja}}</td>
      <td>
        <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar btn btn-warning btn-text-icon" > <i class="ti-pencil menu-icon"></i></a>
        <a href="#"  data-toggle="modal" data-target="" class="eliminar btn btn-danger btn-text-icon"> <i class=" ti-close menu-icon"></i></a>
      </td>
    </tr>
  @endforeach
  </tbody>
  <tfoot class="thead-dark">
    <tr>
      <th>Id</th>
      <th>Articulo</th>
      <th>Lugar</th>
      <th>Fecha USO</th>
      <th>Fecha BAJA</th>
      <th>Acciones</th>
    </tr>
  </tfoot>
</table>
{!! Form::open(['route'=>['Inventario.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
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
            link  = '{{ asset("/index.php/Inventario/")}}/'+id;

            jQuery.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    jQuery.each(data, function(index, el) {
                      jQuery('#inventario').val(el.inventario);
                      jQuery('#cantidad').val(el.cantidad);
                      jQuery('#lugar').val(el.lugar);
                      jQuery('#tipo').val(el.tipo);
                      jQuery('#fecha_uso').val(el.fecha_uso);
                      jQuery('#fecha_baja').val(el.fecha_baja);
                      jQuery('#observacion').val(el.observacion);
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

            if(confirm('Esta seguro de eliminar el Inventario'))
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
