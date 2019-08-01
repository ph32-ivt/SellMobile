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
            ['name'=>'create-user','display_name'=>'Thêm thành viên'],
            ['name'=>'edit-user','display_name'=>'Sửa thành viên'],
            ['name'=>'delete-user','display_name'=>'Xóa thành viên'],
            /*
            Category
            */
            ['name'=>'view-category','display_name'=>'Xem thể danh mục'],
            ['name'=>'create-category','display_name'=>'Thêm danh mục'],
            ['name'=>'edit-category','display_name'=>'Sửa danh mục'],
            ['name'=>'delete-category','display_name'=>'Xóa Danh Mục'],
            ['name'=>'history-category','display_name'=>'Xem lịch sử xóa DM'],
            /*
            Product
            */
            ['name'=>'view-product','display_name'=>'Xem sản phẩm'],
            ['name'=>'create-product','display_name'=>'Thêm sản phẩm'],
            ['name'=>'edit-product','display_name'=>'Sửa sản phẩm'],
            ['name'=>'delete-product','display_name'=>'Xóa sản phẩm'],
             ['name'=>'action-product','display_name'=>'Action product'],
            /*
            Order
            */
            ['name'=>'view-order','display_name'=>'Xem đơn đặc hàng'],
            ['name'=>'delete-order','display_name'=>'Xóa đơn đặc hàng'],
            ['name'=>'browser-order','display_name'=>'Duyệt đơn hàng'],
             ['name'=>'history-order','display_name'=>'Lịch sử Xóa đơn hàng'],
            /*slides*/

            ['name'=>'delete-slide','display_name'=>'Xóa slides'],
             ['name'=>'create-slide','display_name'=>'Thêm slides'],

              ['name'=>'delete-role','display_name'=>'Xóa Gruop User'],
             ['name'=>'create-role','display_name'=>'Thêm nhóm quản trị'],
              ['name'=>'edit-role','display_name'=>'Sửa nhóm quản trị']
        ]);
    }
}
