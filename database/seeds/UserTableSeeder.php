<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        	[
        		'name'=>'HoangKha',
        		'email'=>'hoangkha0164@gmail.com',
        		'password'=>'123456',
        		'gender'=>'nam',
        		'phone'=>'0999588993',
        		'address'=>'quang nam'
        	]

        );
    }
}
