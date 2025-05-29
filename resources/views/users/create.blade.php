<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-6 border border-[#708238]">

                @if ($errors->any())
                    <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-black">Nombre</label>
                        <input type="text" name="name" id="name" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
                        <input type="email" name="email" id="email" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-black">Contraseña</label>
                        <input type="password" name="password" id="password" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mb-4">
                        <label for="roles" class="block text-sm font-medium text-black">Rol</label>
                        <select name="roles[]" id="roles" multiple required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                            @endforeach
                        </select>
                        <p class="text-sm text-gray-500 mt-1">Mantén presionado Ctrl (o Cmd en Mac) para seleccionar múltiples roles.</p>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-[#708238] hover:bg-[#5e6f2f] text-white font-semibold py-2 px-4 rounded-lg transition">
                            Crear Usuario
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
