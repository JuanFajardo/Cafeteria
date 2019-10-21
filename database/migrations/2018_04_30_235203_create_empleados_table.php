<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre')->nullable();
          $table->string('ci')->nullable();
          $table->string('telefono')->nullable();
          $table->string('email')->nullable();
          $table->string('direccion')->nullable();
          $table->string('zona')->nullable();
          $table->date('fecha_nacimiento')->nullable();
          $table->integer('id_usuario');
          $table->softDeletes();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
