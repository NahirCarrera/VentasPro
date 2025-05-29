<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AssignAdminRoleSeeder extends Seeder
{
    public function run(): void
    {
        // Asegúrate de que el rol admin existe
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Buscar usuario con ID 1
        $user = User::find(1);

        if ($user) {
            $user->assignRole($adminRole);
            $this->command->info("Rol 'admin' asignado al usuario con ID 1: {$user->name}");
        } else {
            $this->command->warn("No se encontró un usuario con ID 1.");
        }
    }
}
