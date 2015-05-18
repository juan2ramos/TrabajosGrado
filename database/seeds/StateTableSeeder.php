<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StateTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->insert([
            'name_state' => 'progreso'
        ]);
        \DB::table('states')->insert([
            'name_state' => 'aprobado'
        ]);
        \DB::table('states')->insert([
            'name_state' => 'no aprobado'
        ]);
        // $this->call('UserTableSeeder');
    }

}
