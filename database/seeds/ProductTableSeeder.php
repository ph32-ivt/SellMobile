<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryID = Category::pluck('id')->toArray();
        Product::create([
            'name'=>'iphone 5','pro_slug'=>'iphone-5','description'=>'đẹp','image'=>'aaaaa','status'=>1,'pro_hot'=>1,'category_id'=>$categoryID[array_rand($categoryID)],'brand_id'=>1
        ]);
    }
}
