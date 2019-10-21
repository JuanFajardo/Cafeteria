@extends('bett0')


@section('title') Bienes @endsection
@section('bien') active @endsection

@section('titulo')
  <h4> <i class="ti-bookmark-alt menu-icon"></i> Bienes </h4>
 @endsection

@section('descripcion') Listado de los bienes @endsection

@section('boton')
<a href="#modalAgregar"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">

      <div class="modal-header panel-heading">
        <b>Insertar nuevo Bien</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="row">
          <div class="col-md-4">
            <label for="bien_" > <b><i>Bien</i></b> </label>
            {!! Form::text('bien', null, ['class'=>'form-control letras', 'placeholder'=>'Bienes', 'id'=>'bien_']) !!}
          </div>
          <div class="col-md-2">
            <label for="unidad_" > <b><i>Unidad</i></b> </label>
            {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'unidad_']) !!}
          </div>
          <div class="col-md-2">
            <label for="cantidad_" > <b><i>Cantidad</i></b> </label>
            {!! Form::text('cantidad', null, ['class'=>'form-control', 'placeholder'=>'Cantidad', 'id'=>'cantidad_']) !!}
          </div>
          <div class="col-md-2">
            <label for="precio_" > <b><i>Precio</i></b> </label>
            {!! Form::text('precio', null, ['class'=>'form-control', 'placeholder'=>'Cantidad', 'id'=>'precio_']) !!}
          </div>
          <div class="col-md-2">
            <label for="total_" > <b><i>Total</i></b> </label>
            {!! Form::text('total', null, ['class'=>'form-control', 'placeholder'=>'Total', 'id'=>'total_']) !!}
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
                    {!! Form::open(['route'=>['Bien.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-4">
                        <label for="bien_" > <b><i>Bien</i></b> </label>
                        {!! Form::text('bien', null, ['class'=>'form-control letras', 'placeholder'=>'Bienes', 'id'=>'bien', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="unidad_" > <b><i>Unidad</i></b> </label>
                        {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'unidad']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="cantidad_" > <b><i>Cantidad</i></b> </label>
                        {!! Form::text('cantidad', null, ['class'=>'form-control', 'placeholder'=>'Cantidad', 'id'=>'cantidad']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="precio_" > <b><i>Precio</i></b> </label>
                        {!! Form::text('precio', null, ['class'=>'form-control', 'placeholder'=>'Cantidad', 'id'=>'precio']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="total_" > <b><i>Total</i></b> </label>
                        {!! Form::text('total', null, ['class'=>'form-control', 'placeholder'=>'Total', 'id'=>'total']) !!}
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
      <th>Bien</th>
      <th>Unidad</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Total</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{ date('d-m-Y', strtotime($dato->created_at)) }}</td>
      <td>{{$dato->bien}}</td>
      <td>{{$dato->cantidad}}</td>
      <td>{{$dato->precio}}</td>
      <td>{{$dato->total}}</td>
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
      <th>Bien</th>
      <th>Unidad</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Total</th>
      <th>Acciones</th>
    </tr>
  </tfoot>
</table>
{!! Form::open(['route'=>['Bien.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
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

  $('#total_').focus(function(){
    var cantidad = $('#cantidad_').val();
    var precio   = $('#precio_').val();
    var total    = parseFloat(cantidad) * parseFloat(precio);
    $('#total_').val(total);
  });

  $('#total').focus(function(){
    var cantidad = $('#cantidad').val();
    var precio   = $('#precio').val();
    var total    = parseFloat(cantidad) * parseFloat(precio);
    $('#total').val(total);
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
    link  = '{{ asset("/index.php/Bien/")}}/'+id;

    jQuery.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        jQuery.each(data, function(index, el) {
          jQuery('#bien').val(el.bien);
          jQuery('#unidad').val(el.unidad);
          jQuery('#cantidad').val(el.cantidad);
          jQuery('#precio').val(el.precio);
          jQuery('#total').val(el.total);
        });
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

            if(confirm('Esta seguro de eliminar al Bien'))
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
