<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'email' => 'camilo@gmail.com',
            'password' => \Hash::make('12345'),
            'name' => 'Camilo',
            'last_name' => 'Camargo',
            'second_last_name' => 'Reyes',
            'cellphone' => '12123123123',
            'phone' => '1231212312',
            'rol' =>'researchers'
        ]);
        \DB::table('users')->insert([
            'email' => 'jorge@gmail.com',
            'password' => \Hash::make('12345'),
            'name' => 'Jorge',
            'last_name' => 'Herran',
            'second_last_name' => 'Lopez',
            'cellphone' => '12123123123',
            'phone' => '1231212312',
            'rol' =>'students'
        ]);

        // $this->call('UserTableSeeder');
    }

}
