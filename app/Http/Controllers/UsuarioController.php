<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    // Mostrar el formulario para crear un nuevo usuario
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    // Almacenar el nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password' => 'required|min:6',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
        ], [
            'email.unique' => 'Este correo ya está registrado.',
        ]);

        // Si el usuario autenticado es secre, impedir que asigne rol admin
        if ($request->user()->hasRole('secretaria') && in_array('admin', $request->roles)) {
            return redirect()->back()->withErrors(['roles' => 'No tienes permiso para asignar el rol admin.']);
        }


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Asignar los roles seleccionados
        $user->syncRoles($request->roles);

        return redirect()->route('user.index')->with('success', 'Usuario creado correctamente.');
    }

    // Mostrar el listado de usuarios
    public function index()
    {
        $users = User::with('roles')->get();

        return view('users.index', compact('users'));
    }
}
