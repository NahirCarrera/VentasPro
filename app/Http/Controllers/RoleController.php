<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function crear(){
        $role = Role::create(['name' => 'secretaria']);
        return redirect()->route('dashboard');
    }

    public function asignarAdmin(){
        $user=User::find(1);
        $user->assignRole('admin');
        return redirect()->route('dashboard');
    }

    public function asignarCliente(){
        $user=User::find(2);
        $user->assignRole('cliente');
        return redirect()->route('dashboard');
    }
}
