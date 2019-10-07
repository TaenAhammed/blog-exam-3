<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer = new Role();
        $role_customer->name = "customer";
        $role_customer->description = "A role for customers";
        $role_customer->save();

        $role_admin = new Role();
        $role_admin->name = "admin";
        $role_admin->description = "A role for admins";
        $role_admin->save();
    }
}
