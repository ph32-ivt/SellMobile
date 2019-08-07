<?php

use Illuminate\Database\Seeder;
use App\Brand;
class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([

        		['name'=>'Samsung','description'=>'sam-sung'],
        		['name'=>'Apple','description'=>'apple'],
        		['name'=>'Oppo','description'=>'oppo'],
        		['name'=>'Sony','description'=>'sony'],
        		['name'=>'Xiaomi','description'=>'xiaomi'],
        		['name'=>'Huawei','description'=>'huawei'],
        		['name'=>'Vivo','description'=>'vivo'],
        		['name'=>'Nokia','description'=>'nokia'],
        		['name'=>'Asus','description'=>'asus'],
                ['name'=>'mobile','description'=>'mobile'],
        ]);
    }
}
