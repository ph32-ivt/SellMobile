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
        ['name'=>'Iphone', 'cate_slug'=>'iphone','created_at' => now(),'updated_at' => now()],
        ['name'=>'Samsung','cate_slug'=>'sam-sung','created_at' => now(),'updated_at' => now()],       
        ['name'=>'Oppo', 'cate_slug'=>'oppo','created_at' => now(),'updated_at' => now()],
        ['name'=>'Xiaomi', 'cate_slug'=>'xiaomi','created_at' => now(),'updated_at' => now()],
        ['name'=>'Huawai', 'cate_slug'=>'huawai','created_at' => now(),'updated_at' => now()],
        ['name'=>'Nokia', 'cate_slug'=>'nokia','created_at' => now(),'updated_at' => now()],
        ['name'=>'Mobile', 'cate_slug'=>'mobile','created_at' => now(),'updated_at' => now()]
    
              ]);
    }
  }
