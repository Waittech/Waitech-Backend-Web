<?php

namespace Database\Seeders;

use App\Models\Access\Permission;
use App\Models\Access\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset cached roles and permissions
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

      // create permissions
      Permission::create(['name' => 'create company']);
      Permission::create(['name' => 'manage permissions']);
      Permission::create(['name' => 'view settings']);
      Permission::create(['name' => 'manage settings']);
      Permission::create(['name' => 'view finance']);
      Permission::create(['name' => 'manage finance']);
      Permission::create(['name' => 'view table']);
      Permission::create(['name' => 'manage table']);
      Permission::create(['name' => 'view accounts']);
      Permission::create(['name' => 'manage accounts']);

      // create roles and assign created permissions

      $role = Role::create(['name' => 'admin'])
        ->givePermissionTo([
            Permission::all()
        ]);

      $role = Role::create(['name' => 'manager'])
        ->givePermissionTo([
            'view settings',
            'view finance',
            'manage finance',
            'view table',
            'manage table',
            'view accounts',
            'manage accounts'
        ]);

      $role = Role::create(['name' => 'employee'])
        ->givePermissionTo([
            'view table',
            'view accounts',
        ]);

      $role = Role::create(['name' => 'user']);
      $role = Role::create(['name' => 'visitor']);
    }
}
