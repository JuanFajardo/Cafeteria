@extends('bett0')


@section('title') Dosificacion @endsection
@section('dosificacion') active @endsection

@section('titulo')
  <h4> <i class="ti-medall menu-icon"></i> Dosificacion </h4>
 @endsection

@section('descripcion') Listado de las dosificaciones @endsection

@section('boton')
<a href="#NuevoDosificacion"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('cuerpo')
<div class="row">
  <div class="col-md-2">
    <input type="text" name="nro_autorizacion" id="nro_autorizacion" placeholder="Nro Autorizacion" value="" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="text" name="numero_factura" id="numero_factura" placeholder="Nro Factura" value="" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="text" name="ci" id="ci" placeholder="ci" value="" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="text" name="fecha" id="fecha" placeholder="yyyymmdd" value="" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="text" name="costo_total" id="costo_total" placeholder="Costo Total" value="" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="text" name="dosificacion" id="dosificacion" placeholder="Dosificacion" value="" class="form-control">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <a href="#dosificacionActual" data-toggle="modal" class="form-control btn btn-info btn-text-icon"> <i class="ti-eye menu-icon"></i> Ver Dosificaci&oacute;n </a>
  </div>
  <div class="col-md-2">
    <button type="button" name="button" class="form-control btn btn-success btn-text-icon" class="form-control" id="botonLimpiar"> <i class="ti-brush-alt menu-icon"></i> Limpiar Campos</button>
  </div>
  <div class="col-md-2">
    <button type="button" name="button" class="form-control btn btn-warning  btn-text-icon" class="form-control" id="botonVerificar"> <i class="ti-lock menu-icon"></i> Codigo de Control</button>
  </div>
  <div class="col-md-6">
    <input type="text" name="codigo" id="codigo" placeholder="Codigo Control" value="" class="form-control">
  </div>
</div>

<br>

@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
@endif

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<br><br>

<table id="tablaDosificacion" class="table table-bordered table-hover" cellspacing="0" width="100%">
  <thead style="background-color:#343a40; color:#fff;">
    <tr>
        <th>#</th>
        <th>Nro  Factura</th>
        <th>NIT</th>
        <th>Nro de Autorizacion</th>
        <th>Fecha De Registro</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1;?>
  @foreach($dosificaciones as $dosificacion)
    <tr>
      <td><?php echo $i++;?></td>
      <td>{{$dosificacion->numero_factura}}</td>
      <td>{{$dosificacion->nit}}</td>
      <td>{{$dosificacion->nro_autorizacion}}</td>
      <td>{{$dosificacion->created_at}}</td>
    </tr>
  @endforeach
  </tbody>
  <tfoot class="thead-dark">
    <tr>
      <th>#</th>
      <th>Nro  Factura</th>
      <th>NIT</th>
      <th>Nro de Autorizacion</th>
      <th>Fecha De Registro</th>
  </tr>
  </tfoot>
</table>
@endsection


@section('modal1')
<div class="modal fade" id="NuevoDosificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content panel panel-success">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Nuevo Dosificacion</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(array('url' => 'Dosificacion', 'method' => 'post')) !!}

              <div class="row">
                <div class="col-md-6">
                  <label for="">Numero de Factura</label>
                  <input type="text" name="numero_factura" class='form-control' >
                </div>
                <div class="col-md-6">
                  <label for="">NIT</label>
                  <input type="text" name="nit" class='form-control' >
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="">N° de Autorizaci&oacute;n</label>
                  <input type="text" name="nro_autorizacion" class='form-control' >
                </div>
                <div class="col-md-6">
                  <label for="">Llave</label>
                  <input type="text" name="llave" class='form-control' >
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="">Fecha Limite de Emisión</label>
                  <input type="text" name="fecha_limite_emision" class='form-control' >
                </div>
                <div class="col-md-6">
                  <label for="">Titulo</label>
                  <input type="text" name="titulo" class='form-control' >
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="">Leyenda 1</label>
                  <textarea name="leyenda1" class='form-control'  rows="4"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="">Leyenda 2</label>
                  <textarea name="leyenda2" class='form-control'  rows="4"></textarea>
                </div>
              </div>

              <br>

              <div class="row">
                <div class="col-d-3">
                  <input type="submit" name="Registrar" class='btn btn-success' value="Registrar">
                </div>
              </div>

            {!! Form::close() !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

<style>
.campo
{
  font-weight: bold;
}
</style>

@section('modal2')
<div class="modal fade" id="dosificacionActual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content panel panel-info">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Dosificaci&oacute;n Actual</h4>
            </div>
            <div class="modal-body">
              <table class="table table-bordered">
                <tr>
                  <td class="campo">NIT</td>
                  <td>{{$actual->nit or 'Default'}}</td>
                  <td class="campo">Numero de Factura</td>
                  <td>{{$actual->numero_factura or 'Default'}}</td>
                  <td class="campo">Numero de Autorizaci&oacute;n</td>
                  <td>{{$actual->nro_autorizacion or 'Default'}}</td>
                </tr>
                <tr>
                  <td class="campo">Titulo</td>
                  <td>{{$actual->titulo or 'Default'}}</td>
                  <td class="campo">Fecha De registro</td>
                  <td>{{$actual->created_at or 'Default'}}</td>
                  <td class="campo">Fecha Limite de Emision</td>
                  <td>{{$actual->fecha_limite_emision or 'Default'}}</td>
                </tr>
                <tr>
                  <td class="campo">Llave</td>
                  <td colspan="5">{{$actual->llave or 'Default'}}</td>
                </tr>
                <tr>
                  <td class="campo">Leyenda1</td>
                  <td colspan="5">{{$actual->leyenda1 or 'Default'}}</td>
                </tr>
                <tr>
                  <td class="campo">Leyenda2</td>
                  <td colspan="5">{{$actual->leyenda2 or 'Default'}}</td>
                </tr>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop

@section('modal3')
<div class="modal fade" id="ActualizarDosificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-success">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Actualizar Dosificaci&oacute;n</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(array('url' => 'SIIM/Dosificacion/update', 'method' => 'PATCH')) !!}
            <table class="table table-hover">
              <tr>
                <td>Numero de Factura</td>
                <td><input type="text" name="numero_factura" id="numero_factura" class='form-control' ></td>
              </tr>
              <tr>
                <td>NIT</td>
                <td><input type="text" name="nit" class='form-control' id="nit" ></td>
              </tr>
              <tr>
                <td>NÂ° de Autorizaci&oacute;n</td>
                <td><input type="text" name="nro_autorizacion" id="nro_autorizacion" class='form-control' ></td>
              </tr>
              <tr>
                <td>Llave</td>
                <td><input type="text" name="llave" id="llave" class='form-control' ></td>
              </tr>
              <tr>
                <td>Llave</td>
                <td><input type="text" name="fecha_limite_emision" id="fecha_limite_emision" class='form-control' ></td>
              </tr>
              <tr>
                <td>Titulo</td>
                <td><input type="text" name="titulo" id="titulo" class='form-control' ></td>
              </tr>
              <tr>
                <td>Leyenda 1</td>
                <td>
                    <textarea name="leyenda1" id="leyenda1" class='form-control'  rows="4"></textarea>
                </td>
              </tr>
              <tr>
                <td>Leyenda 2</td>
                <td>
                  <textarea name="leyenda2" id="leyenda2" class='form-control'  rows="4"></textarea>
                  </td>
              </tr>
              <tr>
                <td></td>
                <td align="right"><input type="submit" name="ejecutar" class='btn btn-success' value="Actualizar"></td>
              </tr>
              <input type="hidden" name="id" id="id">
            </table>
            {!! Form::close() !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

@section('modal4')
<div class="modal fade" id="EliminarDosificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Desea Eliminar Dosificacion?</h4>
            </div>
      <div class="modal-footer">
        {!! Form::open(['route'=>['Dosificacion.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
      <input type="submit" class="btn blue" value="Aceptar">
      <input type="hidden" name="id_borrar" id="id_borrar" value="">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      {!! Form::close() !!}
      </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
jQuery(document).ready(function(){
            jQuery('#tablaDosificacion').DataTable({
                "order": [[ 0, 'asc']],
                "language":
                {
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

  jQuery('#botonVerificar').click(function(){

    var  nro_autorizacion = jQuery('#nro_autorizacion').val();
    var  numero_factura   = jQuery('#numero_factura').val();
    var  ci               = jQuery('#ci').val();
    var  fecha            = jQuery('#fecha').val();
    var  costo_total      = jQuery('#costo_total').val();
    var  dosificacion     = jQuery('#dosificacion').val();

    url  = '{{ asset("/index.php/Dosificacion")}}/'+nro_autorizacion+'/'+numero_factura+'/'+ci+'/'+fecha+'/'+costo_total+'/'+dosificacion;
    jQuery.getJSON(url, null, function(data) {
       if(data.length>0){
           jQuery.each(data, function(field, e){
               jQuery('#codigo').val(e.codigo);
           });
       }
    });

  });

  function ver(id){
    event.preventDefault();
    url  = '{{ asset("/index.php/SIIM/Dosificacion")}}/'+id;
    $.getJSON(url, null, function(data) {
       if(data.length>0){
           $.each(data, function(field, e){
               $('#numero_factura').val(e.numero_factura);
               $('#nit').val(e.nit);
               $('#nro_autorizacion').val(e.nro_autorizacion);
               $('#llave').val(e.llave);
               $('#fecha_limite_emision').val(e.fecha_limite_emision);
               $('#titulo').val(e.titulo);
               $('#leyenda1').val(e.leyenda1);
               $('#leyenda2').val(e.leyenda2);
               $('#id').val(e.id);
           });
       }
    });
  }
</script>
@endsection
