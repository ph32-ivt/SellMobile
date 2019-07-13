<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        		['name'=>'Điện thoại di động','parent_id'=>1,'cate_slug'=>'dien-thoai-di-dong'],
        		['name'=>'Máy tính bảng','parent_id'=>2,'cate_slug'=>'may-tinh-bang'],
        		['name'=>'Ốp lưng','parent_id'=>3,'cate_slug'=>'op-lung']
        ]);
    }
}
