<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $rootAdmin = Role::create(['name' => 'root admin']);
        $editor = Role::create(['name' => 'Editor']);
        $viewer = Role::create(['name' => 'Viewer']);

        // Create permissions
        $permissions = [
            'view dashboard',
            'view reports',
            'view users',
            'create users',
            'edit users',
            'delete users',
            'view meters',
            'create meters',
            'edit meters',
            'delete meters',
            'view readings',
            'create readings',
            'edit readings',
            'delete readings',
            'manage system',
            'export data',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $rootAdmin->givePermissionTo(Permission::all());
        
        $editor->givePermissionTo([
            'view dashboard',
            'view reports',
            'view users',
            'create users',
            'edit users',
            'view meters',
            'create meters',
            'edit meters',
            'view readings',
            'create readings',
            'edit readings',
            'export data',
        ]);

        $viewer->givePermissionTo([
            'view dashboard',
            'view reports',
            'view users',
            'view meters',
            'view readings',
        ]);
    }
}