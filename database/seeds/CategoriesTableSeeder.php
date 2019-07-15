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
        		['name'=>'Điện thoại di động','parent_id'=>'0','cate_slug'=>'dien-thoai-di-dong'],
                ['name'=>'Samsung','parent_id'=>'1','cate_slug'=>'sam-sung'],
                ['name'=>'Iphone','parent_id'=>'1', 'cate_slug'=>'iphone'],
                ['name'=>'Oppo','parent_id'=>'1', 'cate_slug'=>'oppo'],
                ['name'=>'Xiaomi','parent_id'=>'1', 'cate_slug'=>'xiaomi'],
                ['name'=>'Huawai','parent_id'=>'1', 'cate_slug'=>'huawai'],
                ['name'=>'Nokia','parent_id'=>'1', 'cate_slug'=>'nokia'],
                ['name'=>'Mobile','parent_id'=>'1', 'cate_slug'=>'mobile']
                /*
                */

        		// ['name'=>'Máy tính bảng','cate_slug'=>'may-tinh-bang'],
          //       /*
          //       */
        		// ['name'=>'Ốp lưng','cate_slug'=>'op-lung'],
          //       ['name'=>'Ốp lưng da','cate_slug'=>'op-lung-da'],
          //       ['name'=>'Ốp lưng vải','cate_slug'=>'op-lung-vai']
        ]);
    }
}
