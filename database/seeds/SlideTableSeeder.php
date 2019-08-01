<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('slides')->insert([
        		['image'=>'1.jpg','status'=>1,'created_at' => now(),'updated_at' => now()],
        		['image'=>'2.jpg','status'=>1,'created_at' => now(),'updated_at' => now()],
        		['image'=>'3.jpg','status'=>1,'created_at' => now(),'updated_at' => now()],
        		['image'=>'4.jpg','status'=>1,'created_at' => now(),'updated_at' => now()]
        ]);
    }
}
