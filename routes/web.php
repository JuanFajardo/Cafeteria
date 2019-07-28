<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if ( !isset( \Auth::user()->id ) )
      return view('auth.login');
    else
      return redirect('/Inicio');
});

Auth::routes();
Route::get('/Usuario', 'HomeController@index')->name('usuario.lista');
Route::get('/clave', 'HomeController@claveGet')->name('usuario.clave');
Route::post('/clave', 'HomeController@clavePost')->name('usuario.cambiar');



Route::resource('Proveedor', 'ProveedorController');
Route::resource('Dosificacion', 'DosificacionController');
Route::get('Dosificacion/{nro_autorizacion}/{numero_factura}/{ci}/{fecha}/{costo_total}/{dosificacion}', 'DosificacionController@dosificacion');
Route::resource('Sucursal', 'SucursalController');
Route::resource('Bien', 'BienController');
Route::resource('Cliente', 'ClienteController');
Route::get('/Cliente/CI/{id}', 'ClienteController@ci');
Route::resource('Empleado', 'EmpleadoController');
Route::resource('Inventario', 'InventarioController');
Route::resource('Pedido', 'PedidoController');
Route::resource('Menu', 'MenuController');

Route::get('Preparado', 'PedidoController@preparado');
Route::get('Preparado/Pedido/{id}', 'PedidoController@pedido');
Route::get('Preparado/Preparar/{id}', 'PedidoController@preparar');


Route::get('Pedidos/{id}', 'PedidoController@pedidos');
Route::get('Pagar/{id}', 'PedidoController@pagar');
Route::get('Facturar/{id}', 'PedidoController@factura');

Route::get('Mapa/{id}', 'PedidoController@mapa');


Route::get('Reporte', 'ReporteController@index');
Route::post('Reporte', 'ReporteController@reporte')->name('reporte.generar');

Route::get('Celular', 'ReporteController@celular');
Route::post('Celular', 'ReporteController@celularPost');
Route::get('Inicio', 'ReporteController@inicio');
