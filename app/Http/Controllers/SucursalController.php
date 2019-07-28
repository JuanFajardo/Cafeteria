<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sucursal;
class SucursalController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Sucursal::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('sucursal.index', compact('datos', 'unidades'));
    }
  }

  public function store(Request $request){
    $dato = new Sucursal;
    $request['id_user'] = \Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Sucursal');
  }

  public function show($id){
    $datos = Sucursal::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Sucursal::find($id);
    $request['id_user'] = \Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Sucursal');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Sucursal::find($id);
      $dato->delete();
      return "Sucursal Eliminado";
    }else{
      return redirect('/');
    }
  }

}
