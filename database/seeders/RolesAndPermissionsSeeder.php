<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'manage users',
            'manage customers',
            'manage vehicles',
            'manage bookings',
            'manage mechanics',
            'manage services',
            'manage invoices',
            'manage reports',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Create roles
        $admin = Role::firstOrCreate([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);

        $serviceAdvisor = Role::firstOrCreate([
            'name' => 'Service Advisor',
            'guard_name' => 'web',
        ]);

        $mechanic = Role::firstOrCreate([
            'name' => 'Mechanic',
            'guard_name' => 'web',
        ]);

        // Assign permissions
        $admin->givePermissionTo(Permission::all());

        $serviceAdvisor->givePermissionTo([
            'manage customers',
            'manage vehicles',
            'manage bookings',
            'manage invoices',
        ]);

        $mechanic->givePermissionTo([
            'manage services',
        ]);
    }
}