@extends('bett0')


@section('title') Sucursal @endsection
@section('sucursal') active @endsection

@section('titulo')
  <h4> <i class="ti-shopping-cart menu-icon"></i> Inventarios </h4>
 @endsection

@section('descripcion') Listado de las Sucursal @endsection

@section('boton')
<a href="#modalAgregar"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">

      <div class="modal-header panel-heading">
        <b>Insertar nueva Unidad</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}
        <div class="row">
          <div class="col-md-4">
            <label for="sucursal_" > <b><i>Sucursal</i></b> </label>
            {!! Form::text('sucursal', null, ['class'=>'form-control letras', 'placeholder'=>'sucursal', 'id'=>'sucursal_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="direccion_" > <b><i>Direccion</i></b> </label>
            {!! Form::text('direccion', null, ['class'=>'form-control letras', 'placeholder'=>'Direccion', 'id'=>'direccion_']) !!}
          </div>
          <div class="col-md-4">
            <label for="descripcion_" > <b><i>Descripcion</i></b> </label>
            {!! Form::textarea('descripcion', null, ['class'=>'form-control letras', 'placeholder'=>'Descripcion', 'id'=>'descripcion_']) !!}
          </div>
        </div>

        <hr>

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
                    <b>Actualizar Unidad</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Sucursal.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-4">
                        <label for="sucursal" > <b><i>Sucursal</i></b> </label>
                        {!! Form::text('sucursal', null, ['class'=>'form-control letras', 'placeholder'=>'sucursal', 'id'=>'sucursal', 'required']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="direccion" > <b><i>Direccion</i></b> </label>
                        {!! Form::text('direccion', null, ['class'=>'form-control letras', 'placeholder'=>'Direccion', 'id'=>'direccion']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="descripcion" > <b><i>Descripcion</i></b> </label>
                        {!! Form::textarea('descripcion', null, ['class'=>'form-control letras', 'placeholder'=>'Descripcion', 'id'=>'descripcion']) !!}
                      </div>
                    </div>
                    <hr>
                    {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection


@section('cuerpo')
<table id="tabla" class="table display" cellspacing="0" width="100%">
  <thead style="background-color:#343a40; color:#fff;">
    <tr>
      <th>Id</th>
      <th>Sucursal</th>
      <th>Direccion</th>
      <th>Descripcion</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{$dato->sucursal}}</td>
      <td>{{$dato->direccion}}</td>
      <td>{{$dato->descripcion}}</td>
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
      <th>Sucursal</th>
      <th>Direccion</th>
      <th>Descripcion</th>
      <th>Acciones</th>
    </tr>
  </tfoot>
</table>
{!! Form::open(['route'=>['Sucursal.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
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
    link  = '{{ asset("/index.php/Sucursal/")}}/'+id;

    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {
          $('#sucursal').val(el.sucursal);
          $('#direccion').val(el.direccion);
          $('#descripcion').val(el.descripcion);
        });
      }
    });
  });


  $('.eliminar').click(function(event) {
    event.preventDefault();
    var fila = $(this).parents('tr');
    var id = fila.data('id');
    var form = $('#form-delete');
    var url = form.attr('action').replace(':DATO_ID',id);
    var data = form.serialize();

    if(confirm('Esta seguro de eliminar la Unidad')) {
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
