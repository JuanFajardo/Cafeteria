@extends('bett0')

@section('title') Inicio @endsection
@section('inicio') active @endsection

@section('titulo')
  <h4> <i class="ti-home menu-icon"></i> Inicio </h4>
 @endsection

@section('descripcion') Detalle de los datos de factura y ventas @endsection

@section('boton')
<a href="{{asset('index.php/Inicio')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
@endsection


@section('cuerpo')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> </div><br>
                    <div class="panel-body">
                        <table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Mesa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
