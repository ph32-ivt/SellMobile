<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name'=>'hoangkha','email'=>'hoangkha0164@gmail.com','password'=>bcrypt('123456'),'gender'=>'1','phone'=>'0378635050','address'=>'Xã Quế Châu,Huyện Quế Sơn ,Tỉnh Quảng Nam']

        ]);
        DB::table('users')->insert([
            ['name'=>'minh hai','email'=>'admin@gmail.com','password'=>bcrypt('123456'),'gender'=>'1','phone'=>'0378635050','address'=>'Đà nẵng']

        ]);
    }
}
