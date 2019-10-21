<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class UsuarioController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }


  public function editar($id){
    $user = User::find($id);
    return view('auth.editar', compact('user'));
  }

  public function editarPost(Request $request){

  }

  public function registro(){

    return view('auth.register');
  }

  public function registroPost(Request $request){

  }

  public function index()
  {
      $datos = \App\User::all();
      return view('usuario.index', compact('datos'));
  }


  public function claveGet(){
    return view('clave');
  }

  public function clavePost(Request $request){
    //return $request->all();
    $id = \Auth::user()->id;
    $dato = \App\User::find($id);
    $dato->password = bcrypt($request->clave);
    $dato->save();
    $clave = "OK";
    return redirect('/')->with( ['clave' => $clave] );;
  }

}
