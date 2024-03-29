<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiensTable extends Migration
{
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
          $table->increments('id');
          $table->string('bien');
          $table->string('unidad');
          $table->float('cantidad');
          $table->float('precio');
          $table->float('total');
          $table->integer('id_usuario');
          $table->softDeletes();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biens');
    }
}
