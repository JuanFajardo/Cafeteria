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
                            'email'=>'Juan Fajardo',
                            'grupo'=>'1',
                            'password'=> bcrypt('123')]);
    }
}
