<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            /*
            User
            */
            ['name'=>'view-user','display_name'=>'Xem thể thành viên'],
            ['name'=>'add-user','display_name'=>'Thêm thành viên'],
            ['name'=>'edit-user','display_name'=>'Sửa thành viên'],
            ['name'=>'delete-user','display_name'=>'Xóa thành viên'],
            /*
            Category
            */
            ['name'=>'view-category','display_name'=>'Xem thể thể loại'],
            ['name'=>'add-category','display_name'=>'Thêm thể loại'],
            ['name'=>'edit-category','display_name'=>'Sửa thể loại'],
            ['name'=>'delete-category','display_name'=>'Xóa thể loại'],
            /*
            Product
            */
            ['name'=>'view-product','display_name'=>'Xem sản phẩm'],
            ['name'=>'add-product','display_name'=>'Thêm sản phẩm'],
            ['name'=>'edit-product','display_name'=>'Sửa sản phẩm'],
            ['name'=>'delete-product','display_name'=>'Xóa sản phẩm'],
            /*
            Order
            */
            ['name'=>'view-order','display_name'=>'Xem đơn đặc hàng'],
            ['name'=>'edit-order','display_name'=>'Sửa đơn đặc hàng'],
            ['name'=>'delete-order','display_name'=>'Xóa đơn đặc hàng']

        ]);
    }
}
