<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->insert([ 'id'=>'1',
                            'name'=>'bett0',
                            'nombre'=>'Juan Fajardo',
                            'direccion'=>'Calle A',
                            'telefono'=>'77889944',
                            'grupo'=>'1',
                            'id_sucursal'=>'1',
                            'password'=> bcrypt('123')]);
    }
}
