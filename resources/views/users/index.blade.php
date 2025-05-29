<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Listado de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-white">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow border border-[#708238] rounded-lg p-6">
                @if(session('success'))
                    <div class="mb-4 p-4 text-sm text-green-800 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($users->isEmpty())
                    <p class="text-gray-600">No hay usuarios registrados.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-800">
                            <thead class="border-b-2 border-[#708238] bg-[#f0f4ec]">
                                <tr>
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Roles</th>
                                    <th class="px-4 py-2">Creado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr class="border-b hover:bg-[#f9fdf8]">
                                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 font-medium">{{ $user->name }}</td>
                                        <td class="px-4 py-2">{{ $user->email }}</td>
                                        <td class="px-4 py-2">
                                            @foreach ($user->roles as $role)
                                                <span class="inline-block bg-[#708238] text-white text-xs px-2 py-1 rounded mr-1">
                                                    {{ ucfirst($role->name) }}
                                                </span>
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">{{ $user->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
