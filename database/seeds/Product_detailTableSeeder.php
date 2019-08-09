pr<?php

use Illuminate\Database\Seeder;

class Product_detailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
        	//apple
        	['cpu'=>'Apple A12 Bionic 6 nhân','display'=>'OLED, 6.5", Super Retina','pin'=>'3174 mAh','sim'=>'Nano SIM & eSIM','memory'=>'256 GB','camera'=>'Chính 12 MP & Phụ 12 MP','price'=>11990000,'option'=>'white','quantity'=>100,'product_id'=>1,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Apple A10 Fusion 4 nhân 64-bit','display'=>'	LED-backlit IPS LCD, 4.7", Retina HD','pin'=>'1960 mAh','sim'=>'1 Nano SIM, Hỗ trợ 4G','memory'=>'32 GB','camera'=>'Camera sau:	12 MP,Camera trước:	7 MP','price'=>18990000,'option'=>'gold','quantity'=>100,'product_id'=>2,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Apple A11 Bionic 6 nhân','display'=>'LED-backlit IPS LCD, 5.5", Retina HD','pin'=>'2691 mAh, có sạc nhanh','sim'=>'1 Nano SIM, Hỗ trợ 4G','memory'=>'64 GB','camera'=>'Camera sau:	Chính 12 MP & Phụ 12 MP,Camera trước:	7 MP','price'=>27990000,'option'=>'gold','quantity'=>100,'product_id'=>3,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Apple A11 Bionic 6 nhân','display'=>'	OLED, 5.8", Super Retina','pin'=>'2716 mAh, có sạc nhanh','sim'=>'1 Nano SIM, Hỗ trợ 4G','memory'=>'256GB','camera'=>'Camera sau:	Chính 12 MP & Phụ 12 MP,Camera trước:	7 MP','price'=>35990000,'option'=>'black','quantity'=>100,'product_id'=>4,'created_at' => now(),'updated_at' => now()],
        	 //sam sung
        	 ['cpu'=>'Exynos 7885 8 nhân 64-bit','display'=>'Super AMOLED, 6.0", Full HD+','pin'=>'3300 mAh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'128 GB','camera'=>'Camera sau:	Chính 24 MP & Phụ 8 MP, 5 MP,Camera trước:	24 MP','price'=>5990000,'option'=>'black','quantity'=>100,'product_id'=>5,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Qualcomm Snapdragon 660 8 nhân','display'=>'Super AMOLED, 6.3", Full HD+','pin'=>'	3800 mAh, có sạc nhanh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'	128 GB','camera'=>'Camera sau:	Chính 24 MP & Phụ 10 MP, 8 MP, 5 MP,Camera trước:	24 MP','price'=>12490000,'option'=>'black','quantity'=>100,'product_id'=>6,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Exynos 9810 8 nhân 64-bit','display'=>'Super AMOLED, 6.4", Quad HD+ (2K+)','pin'=>'4000 mAh, có sạc nhanh','sim'=>'2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G','memory'=>'128 GB','camera'=>'Camera sau:	Chính 12 MP & Phụ 12 MP,Camera trước:	8 MP','price'=>20490000,'option'=>'black','quantity'=>100,'product_id'=>7,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Exynos 9820 8 nhân 64-bit','display'=>'Dynamic AMOLED, 6.4", Quad HD+ (2K+)','pin'=>'	4100 mAh, có sạc nhanh','sim'=>'2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G','memory'=>'512 GB','camera'=>'Camera sau:	Chính 12 MP & Phụ 12 MP, 16 MP,Camera trước:	Chính 10 MP & Phụ 8 MP','price'=>22990000,'option'=>'black','quantity'=>100,'product_id'=>8,'created_at' => now(),'updated_at' => now()],
        	 //oppo
        	 ['cpu'=>'MediaTek Helio P60 8 nhân 64-bit','display'=>'LTPS LCD, 6.3", Full HD+','pin'=>'3500 mAh, có sạc nhanh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'64 GB','camera'=>'Camera sau:	Chính 16 MP & Phụ 2 MP,Camera trước:	25 MP','price'=>6990000,'option'=>'red','quantity'=>100,'product_id'=>9,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'MediaTek Helio P70 8 nhân','display'=>'LTPS LCD, 6.5", Full HD+','pin'=>'4000 mAh, có sạc nhanh','sim'=>'2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G','memory'=>'	128 GB','camera'=>'Camera sau:	Chính 48 MP & Phụ 5 MP,Camera trước:	16 MP','price'=>8490000,'option'=>'black','quantity'=>100,'product_id'=>10,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Snapdragon 845 8 nhân','display'=>'AMOLED, 6.42", Full HD+','pin'=>'3730 mAh, có sạc nhanh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'256 GB','camera'=>'Camera sau:	Chính 16 MP & Phụ 20 MP,Camera trước:	25 MP','price'=>10990000,'option'=>'red','quantity'=>100,'product_id'=>11,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Snapdragon 710 8 nhân 64-bit','display'=>'	AMOLED, 6.4", Full HD+','pin'=>'3700 mAh, có sạc nhanh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'128 GB','camera'=>'Camera sau:	Chính 12 MP & Phụ 20 MP, TOF 3D,Camera trước:	25 MP','price'=>11990000,'option'=>'blink','quantity'=>100,'product_id'=>12,'created_at' => now(),'updated_at' => now()],
        	 //xiaomi
        	 ['cpu'=>'Snapdragon 712 8 nhân 64-bit','display'=>'Super AMOLED, 5.97", Full HD+','pin'=>'3070 mAh, có sạc nhanh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'64 GB','camera'=>'Camera sau:	Chính 48 MP & Phụ 13 MP, 8 MP,Camera trước:	20 MP','price'=>8490000,'option'=>'black','quantity'=>100,'product_id'=>13,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Qualcomm Snapdragon 632 8 nhân 64-bit','display'=>'IPS LCD, 6.26", HD+','pin'=>'4000 mAh','sim'=>'2 Nano SIM, Hỗ trợ 4G','memory'=>'	32 GB','camera'=>'Camera sau:	Chính 12 MP & Phụ 2 MP,Camera trước:	8 MP','price'=>3690000,'option'=>'black','quantity'=>100,'product_id'=>14,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'	Qualcomm Snapdragon 425 4 nhân 64-bit','display'=>'IPS LCD, 5", HD','pin'=>'3000 mAh','sim'=>'2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G','memory'=>'16 GB','camera'=>'Camera sau:	8 MP,Camera trước:	5 MP','price'=>1990000,'option'=>'black','quantity'=>100,'product_id'=>15,'created_at' => now(),'updated_at' => now()],
        	 ['cpu'=>'Qualcomm Snapdragon 660 8 nhân','display'=>'IPS LCD, 6.3", Full HD+','pin'=>'4000 mAh, có sạc nhanh','sim'=>'2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G','memory'=>'64 GB','camera'=>'Camera sau:	Chính 48 MP & Phụ 5 MP,Camera trước:	13 MP','price'=>4990000,'option'=>'black','quantity'=>100,'product_id'=>16,'created_at' => now(),'updated_at' => now()]





        	  // ['cpu'=>'','display'=>'','pin'=>'','sim'=>'','memory'=>'','camera'=>'','price'=>,'option'=>'','quantity'=>,'product_id'=>,'created_at' => now(),'updated_at' => now()],



        ]);
    }
}
