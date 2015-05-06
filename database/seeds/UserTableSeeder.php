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
            'email' => 'sammy@gmail.com',
            'password' => \Hash::make('12345'),
            'name' => 'Sammy',
            'last_name' => 'Paez',
            'second_last_name' => 'Garcia',
            'cellphone' => '12123123123',
            'phone' => '1231212312',
        ]);

        // $this->call('UserTableSeeder');
    }

}
