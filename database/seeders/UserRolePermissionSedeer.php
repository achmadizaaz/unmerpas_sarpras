<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Create Permission
        Permission::create(['create gedung']);
        Permission::create(['read gedung']);
        Permission::create(['update gedung']);
        Permission::create(['delete gedung']);

        // Create Role
        $role1 = Role::create(['name' => 'administrator']);
        $role1->givePermissionTo('create gedung');
        $role1->givePermissionTo('read gedung');
        $role1->givePermissionTo('update gedung');
        $role1->givePermissionTo('delete gedung');

        $role2 = Role::create(['name' => 'unit']);
        $role2->givePermessionTo('read gedung');
        
        $defaultUser = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        // Account User

        $admin = User::create(array_merge($defaultUser,[
            'name' => 'administrator',
            'email' => 'admin@unmerpas.ac.id'
        ]));

        $admin->assignRole($role1);

        $unit = User::create(array_merge($defaultUser,[
            'name' => 'PDMTI',
            'email' => 'pdmti@unmerpas.ac.id'
        ]));

        $unit->assignRole($role2);
    }
}
