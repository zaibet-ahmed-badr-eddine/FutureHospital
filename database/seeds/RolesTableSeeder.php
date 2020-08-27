<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new Role();
        $user1->id = 1;
        $user1->role = "admin";
        $user1->save();

        $user2 = new Role();
        $user2->id = 2;
        $user2->role = "chef_service";
        $user2->save();

        $user3 = new Role();
        $user3->id = 3;
        $user3->role = "medcin";
        $user3->save();

        $user4 = new Role();
        $user4->id = 4;
        $user4->role = "infermiere";
        $user4->save();
        
    }
}
