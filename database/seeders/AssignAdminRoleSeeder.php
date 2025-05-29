<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AssignAdminRoleSeeder extends Seeder
{
    public function run(): void
    {
        // Asegúrate de que el rol 'admin' exista
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Verifica si ya existe un usuario con ese correo
        $user = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('admin1234'),
                'email_verified_at' => now()
            ]
        );

        // Asignar rol si no lo tiene
        if (!$user->hasRole('admin')) {
            $user->assignRole($adminRole);
            $this->command->info("Usuario 'admin@gmail.com' creado y asignado al rol 'admin'.");
        } else {
            $this->command->info("El usuario 'admin@gmail.com' ya tiene el rol 'admin'.");
        }
    }
}
