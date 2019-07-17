<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	['name'=>'anh chinh','path'=>'images/iphone-7-gold.png','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/iphone-8-plus.png','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/iphone-x-256gb.png','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/iphone-xs-max-256gb-white.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/samsung-galaxy-a7-2018-128gb-black.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/samsung-galaxy-a9-2018-blue.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/samsung-galaxy-note-9-512gb-blue.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/samsung-galaxy-s10-plus-512gb-ceramic-black.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/oppo-f9-6gb-red.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/oppo-f11-pro-128gb-avatar-1.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/oppo-find-x-1.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/oppo-r17-pro-14.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/xiaomi-mi-9-se-blue.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/xiaomi-redmi-7-16gb-blue.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/xiaomi-redmi-go-16gb-black.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	['name'=>'anh chinh','path'=>'images/xiaomi-redmi-note-7.jpg','product_id'=>1,'created_at' => now(),'updated_at' => now()],


        ]);
    }
}
