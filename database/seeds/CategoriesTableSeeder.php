<?php

use Illuminate\Database\Seeder;
use App\Category;
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
            /*phone*/
        		['name'=>'Điện thoại di động','cate_slug'=>'dien-thoai-di-dong'],
                ['name'=>'Samsung','cate_slug'=>'sam-sung'],
                ['name'=>'Iphone', 'cate_slug'=>'iphone'],
                ['name'=>'Oppo', 'cate_slug'=>'oppo'],
                ['name'=>'Xiaomi', 'cate_slug'=>'xiaomi'],
                ['name'=>'Huawai', 'cate_slug'=>'huawai'],
                ['name'=>'Nokia', 'cate_slug'=>'nokia'],
                ['name'=>'Mobile', 'cate_slug'=>'mobile'],
                /*
                */

        		['name'=>'Máy tính bảng','cate_slug'=>'may-tinh-bang'],
                /*
                */
        		['name'=>'Ốp lưng','cate_slug'=>'op-lung'],
                ['name'=>'Ốp lưng da','cate_slug'=>'op-lung-da'],
                ['name'=>'Ốp lưng vải','cate_slug'=>'op-lung-vai']
        ]);
    }
}
