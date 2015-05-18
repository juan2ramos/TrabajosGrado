<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MacroprojectTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('macroprojects')->insert([
            'name_macroprojects' => 'MP1',
            'state' => 'Activo'

        ]);\DB::table('macroprojects')->insert([
            'name_macroprojects' => 'MP2',
            'state' => 'Activo'

        ]);\DB::table('macroprojects')->insert([
            'name_macroprojects' => 'MP3',
            'state' => 'Activo'

        ]);
        // $this->call('UserTableSeeder');
    }

}
