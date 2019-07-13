<?php

use Illuminate\Database\Seeder;

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

        		['name'=>'Samsung','des'=>'sam-sung'],
        		['name'=>'Apple','des'=>'apple'],
        		['name'=>'Oppo','des'=>'oppo'],
        		['name'=>'Sony','des'=>'sony'],
        		['name'=>'Xiaomi','des'=>'xiaomi'],
        		['name'=>'Huawei','des'=>'huawei'],
        		['name'=>'Vivo','des'=>'vivo'],
        		['name'=>'Nokia','des'=>'nokia'],
        		['name'=>'Asus','des'=>'asus']



        ]);
    }
}
