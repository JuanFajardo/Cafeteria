<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bien extends Model
{
  use SoftDeletes;
  protected $table    = 'biens';
  protected $fillable = [ 'id', 'bien', 'unidad', 'cantidad', 'precio', 'total', 'id_usuario'];
  protected $dates    = ['deleted_at'];
}
