<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'newsletter.create',
            'newsletter.read',
            'newsletter.update',
            'newsletter.delete'
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                [
                    'name' => $permission,
                    'guard_name' => 'web'
                ]
            );
        }

        $roles = [
            [
                'name' => 'super_admin',
                'permissions' => '*'
            ],
            [
                'name' => 'admin',
                'permissions' => [
                    'newsletter.create',
                    'newsletter.read',
                    'newsletter.update'
                ]
            ],
            [
                'name' => 'user'
            ]
        ];

        foreach ($roles as $role) {
            $roleObject = Role::findOrCreate($role['name']);
            if (isset($role['permissions'])) {
                if (is_string($role['permissions'])) {
                    if ($role['permissions'] == '*') {
                        $roleObject->syncPermissions($permissions);
                    } else {
                        $roleObject->givePermissionTo($role['permissions']);
                    }
                } elseif (is_array($role['permissions'])) {
                    $roleObject->syncPermissions($role['permissions']);
                }
            }
        }
    }
}
