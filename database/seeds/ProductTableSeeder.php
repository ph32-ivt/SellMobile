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
        DB::table('products')->insert([

            ['name'=>'Iphone 7 32G','pro_slug'=>'iphone-7-gold','description'=>'iPhone 7 32GB vẫn mang trên mình thiết kế quen thuộc của từ thời iPhone 6 nhưng có nhiều thay đổi lớn về phần cứng, dàn loa stereo và cấu hình cực mạnh.','image'=>'iphone-7-gold.png','status'=>0,'pro_hot'=>1,'category_id'=>1,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Iphone 8 plus','pro_slug'=>'iphone-8-plus','description'=>'Thừa hưởng những thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.','image'=>'iphone-8-plus.png','status'=>1,'pro_hot'=>1,'category_id'=>1,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Iphone X 256GB','pro_slug'=>'iphone-x-256gb','description'=>'iPhone X được đã được Apple cho ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.','image'=>'iphone-x-256gb.png','status'=>1,'pro_hot'=>1,'category_id'=>1,'created_at' => now(),'updated_at' => now()],
            ['name'=>'iPhone Xs Max 256GB','pro_slug'=>'iphone-xs-max-256gb-white','description'=>'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.','image'=>'iphone-xs-max-256gb-white.jpg','status'=>1,'pro_hot'=>0,'category_id'=>1,'created_at' => now(),'updated_at' => now()],
            //sam sung 
            ['name'=>'Samsung Galaxy A7 (2018) 128GB','pro_slug'=>'samsung-galaxy-a7-2018-128gb-black','description'=>'Được nâng cấp cả RAM và bộ nhớ trong, Samsung Galaxy A7 (2018) 128GB đem lại khả năng đa nhiệm, lưu trữ tốt hơn. Đồng thời đây cũng là chiếc smartphone đầu tiên của Samsung được trang bị tới 3 camera ở mặt sau và cảm biến vân tay cạnh bên.','image'=>'samsung-galaxy-a7-2018-128gb-black.jpg','status'=>1,'pro_hot'=>1,'category_id'=>2,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Samsung Galaxy A9 (2018)','pro_slug'=>'samsung-galaxy-a7-2018-128gb-black','description'=>'Samsung Galaxy A9 (2018) là chiếc điện thoại đầu tiên của Samsung sở hữu hệ thống camera ấn tượng với 4 thấu kính cùng hàng loạt các nâng cấp đáng giá về cấu hình và tính năng hiện đại khác.','image'=>'samsung-galaxy-a7-2018-128gb-black.jpg','status'=>1,'pro_hot'=>1,'category_id'=>2,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Samsung Galaxy Note 9 512GB','pro_slug'=>'samsung-galaxy-note-9-512gb-blue','description'=>'Sau thành công vang dội của Galaxy Note 8 thì Samsung chính thức giới thiệu phiên bản tiếp theo tới người dùng cái tên Samsung Galaxy Note 9 512GB mang trong mình hàng hoạt các thay đổi đột phá với điểm nhấn đặc biệt đến từ chiếc bút S-Pen thần thánh cùng một viên pin dung lượng khổng lồ tới 4.000 mAh.','image'=>'samsung-galaxy-note-9-512gb-blue.jpg','status'=>1,'pro_hot'=>0,'category_id'=>2,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Samsung Galaxy S10+ (512GB)','pro_slug'=>'samsung-galaxy-s10-plus-512gb-ceramic-black','description'=>'Samsung Galaxy S10+ (512GB) - phiên bản kỷ niệm 10 năm chiếc Galaxy S đầu tiên ra mắt, là một chiếc smartphone hội tủ đủ các yếu tố mà bạn cần ở một chiếc máy cao cấp trong năm 2019.','image'=>'samsung-galaxy-s10-plus-512gb-ceramic-black.png','status'=>1,'pro_hot'=>0,'category_id'=>2,'created_at' => now(),'updated_at' => now()],
            //oppo
             ['name'=>'OPPO F9 6GB','pro_slug'=>'oppo-f9-6gb-red','description'=>'Là chiếc điện thoại OPPO được nâng cấp cấu hình, cụ thể là RAM lên tới 6 GB, OPPO F9 6GB còn trang bị nhiều tính năng đột phá như sở hữu công nghệ sạc VOOC mới nhất, mặt lưng chuyển màu độc đáo, màn hình tràn viền giọt nước và camera chụp chân dung tích hợp trí tuệ nhân tạo A.I hoàn hảo.','image'=>'oppo-f9-6gb-red.jpg','status'=>0,'pro_hot'=>1,'category_id'=>3,'created_at' => now(),'updated_at' => now()],
            ['name'=>'OPPO F11 Pro 128GB','pro_slug'=>'oppo-f11-pro-128gb-avatar-1','description'=>'Lâu nay, những chiếc điện thoại của OPPO thường được đánh giá cao ở camera selfie và với OPPO F11 Pro 128GB thì ngoài thế mạnh về camera trước với hệ thống trượt, OPPO làm người ta phải ấn tượng thêm cả về camera sau.','image'=>'oppo-f11-pro-128gb-avatar-1.jpg','status'=>1,'pro_hot'=>1,'category_id'=>3,'created_at' => now(),'updated_at' => now()],
            ['name'=>'OPPO Find X','pro_slug'=>'oppo-find-x-1','description'=>'OPPO Find X tạo nên một cú hích lớn trong làng smartphone hiện nay khi mang trong mình nhiều tính năng đột phá mà nổi bật nhất đến từ thiết kế sáng tạo và một hiệu năng đỉnh cao.','image'=>'oppo-find-x-1.jpg','status'=>1,'pro_hot'=>1,'category_id'=>3,'created_at' => now(),'updated_at' => now()],
            ['name'=>'OPPO R17 Pro','pro_slug'=>'oppo-r17-pro-14','description'=>'Samsung Galaxy S10+ (512GB) - phiên bản kỷ niệm 10 năm chiếc Galaxy S đầu tiên ra mắt, là một chiếc smartphone hội tủ đủ các yếu tố mà bạn cần ở một chiếc máy cao cấp trong năm 2019.','image'=>'oppo-r17-pro-14.jpg','status'=>1,'pro_hot'=>0,'category_id'=>3,'created_at' => now(),'updated_at' => now()],
            //xiaomi
            ['name'=>'Xiaomi Mi 9 SE','pro_slug'=>'xiaomi-mi-9-se-blue','description'=>'Vẫn như thường lệ thì bên cạnh chiếc flagship Xiaomi Mi 9 cao cấp của mình thì Xiaomi cũng giới thiệu thêm phiên bản rút gọn là chiếc Xiaomi Mi 9 SE. Máy vẫn sở hữu cho mình nhiều trang bị cao cấp tương tự đàn anh.','image'=>'xiaomi-mi-9-se-blue.jpg','status'=>1,'pro_hot'=>1,'category_id'=>4,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Xiaomi Redmi 7 32GB','pro_slug'=>'xiaomi-redmi-7-16gb-blue','description'=>'Nếu bạn đang tìm kiếm một smartphone có mức giá rẻ nhưng cũng phải đáp ứng tốt nhu cầu sử dụng hằng ngày và phải có một thiết kế thời trang thì không có sự lựa chọn nào hợp lý hơn Xiaomi Redmi 7.','image'=>'xiaomi-redmi-7-16gb-blue.jpg','status'=>1,'pro_hot'=>0,'category_id'=>4,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Xiaomi Redmi Go 16GB','pro_slug'=>'xiaomi-redmi-go-16gb-black','description'=>'Xiaomi Redmi Go 16GB là một trong những chiếc smartphone giá rẻ nhất tới từ Xiaomi nhưng vẫn mang lại cho bạn một trải nghiệm mượt mà đến "khó tin".','image'=>'xiaomi-redmi-go-16gb-black.jpg','status'=>1,'pro_hot'=>1,'category_id'=>4,'created_at' => now(),'updated_at' => now()],
            ['name'=>'Xiaomi Redmi Note 7 64GB','pro_slug'=>'xiaomi-redmi-note-7','description'=>'Xiaomi Redmi Note 7 là chiếc smartphone giá rẻ mới được giới thiệu vào đầu năm 2019 với nhiều trang bị đáng giá như thiết kế notch giọt nước hay camera lên tới 48 MP','image'=>'xiaomi-redmi-note-7.jpg','status'=>1,'pro_hot'=>0,'category_id'=>4,'created_at' => now(),'updated_at' => now()],

        ]);
    }
}
