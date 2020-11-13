<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission list
        Permission::create(['name' => 'cat_users_index']);
        Permission::create(['name' => 'cat_users_create']);
        Permission::create(['name' => 'cat_users_read']);
        Permission::create(['name' => 'cat_users_update']);
        Permission::create(['name' => 'cat_users_delete']);

        //rol list

        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'Usuario']);


        $admin->givePermissionTo([
            'cat_users_index',
            'cat_users_create',
            'cat_users_read',
            'cat_users_update',
            'cat_users_delete'
        ]);


        $user = User::find(1);
        $user->assignRole('Admin');
    }
}
