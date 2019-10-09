<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer = Role::where('name', 'customer')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $customer = new User();
        $customer->name = "customer";
        $customer->email = "customer@blog.com";
        $customer->password = bcrypt("customer secret");
        $customer->save();
        $customer->roles()->attach($role_customer);

        $admin = new User();
        $admin->name = "admin";
        $admin->email = "admin@blog.com";
        $admin->password = bcrypt("admin secret");
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
