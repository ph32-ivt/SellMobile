<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	['name'=>'Administrator'],//full quyền 
        	['name'=>'Nhân viên'],// chỉ thêm và sửa ko được xóa 
        	['name'=>'Nhân viên kho']

        ]);
    }
}
