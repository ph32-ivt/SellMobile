<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
<<<<<<< HEAD
         // $this->call(ProductTableSeeder::class);
        // $this->call(UserTableSeeder::class);
=======
        $this->call(ProductTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(Product_detailTableSeeder::class);
        $this->call(ImageTableSeeder::class); 
>>>>>>> aa28f99eee99286bdfba0c9410df05996e708782
    }
}
