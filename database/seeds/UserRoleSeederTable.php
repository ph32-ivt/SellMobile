<?php

use Illuminate\Database\Seeder;
use App\UserRole;
class UserRoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('user_roles')->insert([
       	'user_id'=>1,
       	'role_id'=>1
       ]);
    }
}
