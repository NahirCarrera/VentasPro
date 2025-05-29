<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   // database/seeders/RolesAndPermissionsSeeder.php

    public function run()
    {
        // Crear roles
        $admin = Role::create(['name' => 'admin']);
        $secre = Role::create(['name' => 'secretaria']);
        $bodega = Role::create(['name' => 'bodega']);
        $cajera = Role::create(['name' => 'cajera']);

        // Crear permisos
        Permission::create(['name' => 'crear usuarios']);
        Permission::create(['name' => 'ver usuarios']);
        Permission::create(['name' => 'crear productos']);
        Permission::create(['name' => 'ver productos']);
        Permission::create(['name' => 'crear ventas']);
        Permission::create(['name' => 'ver ventas']);

        // Asignar permisos a roles
        $admin->givePermissionTo(Permission::all());
        $secre->givePermissionTo(['crear usuarios', 'ver usuarios']);
        $bodega->givePermissionTo(['crear productos', 'ver productos']);
        $cajera->givePermissionTo(['crear ventas', 'ver ventas']);
    }

}
