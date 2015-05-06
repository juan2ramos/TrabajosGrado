<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            'time_day' => 'Mañana',
            'state_record' => 'Activo',
            'student_program' => 'Sistemas',
            'user_id' => '1'

        ]);
        \DB::table('students')->insert([
            'time_day' => 'Mañana',
            'state_record' => 'Inactivo',
            'student_program' => 'Sistemas',
            'user_id' => '2'

        ]);

        // $this->call('UserTableSeeder');
    }

}
