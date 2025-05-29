<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @role('admin')
            <div class="p-6 bg-[#f9fafb] border-l-8 border-[#708238] rounded shadow">
                <h3 class="text-lg font-semibold text-[#708238]">Bienvenido Administrador</h3>
                <p class="mt-2 text-gray-700">Tienes acceso completo para gestionar usuarios y roles.</p>

                <div class="mt-6 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
                    <!-- Crear Usuarios -->
                    <a href="{{ route('user.create') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Crear Usuario</h4>
                        <p class="text-sm">Accede al formulario para registrar usuarios con cualquier rol.</p>
                    </a>

                    <!-- Ver Usuarios -->
                    <a href="{{ route('user.index') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Ver Usuarios</h4>
                        <p class="text-sm">Consulta el listado completo de todos los usuarios registrados.</p>
                    </a>
                </div>
            </div>
            @endrole


            @role('secretaria')
            <div class="p-6 bg-[#f9fafb] border-l-8 border-[#708238] rounded shadow">
                <h3 class="text-lg font-semibold text-[#708238]">Bienvenida Secretaria</h3>
                <p class="mt-2 text-gray-700">Puedes registrar nuevos usuarios (excepto administradores) y consultar el listado de usuarios registrados.</p>

                <div class="mt-6 grid gap-4 sm:grid-cols-2 md:grid-cols-2">
                    <!-- Crear Usuarios -->
                    <a href="{{ route('user.create') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Crear Usuario</h4>
                        <p class="text-sm">Accede al formulario para registrar usuarios con rol permitido.</p>
                    </a>

                    <!-- Ver Usuarios -->
                    <a href="{{ route('user.index') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Ver Usuarios</h4>
                        <p class="text-sm">Consulta el listado de usuarios registrados en el sistema.</p>
                    </a>
                </div>
            </div>
            @endrole


            @role('bodega')
            <div class="p-6 bg-[#f9fafb] border-l-8 border-[#708238] rounded shadow">
                <h3 class="text-lg font-semibold text-[#708238]">Bienvenido Responsable de Bodega</h3>
                <p class="mt-2 text-gray-700">Gestiona el inventario: puedes crear y listar categorías y productos.</p>

                <div class="mt-6 grid gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                    <!-- Crear Categoría -->
                    <a href="{{ route('categories.create') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Crear Categoría</h4>
                        <p class="text-sm">Agrega nuevas categorías para organizar los productos.</p>
                    </a>

                    <!-- Listar Categorías -->
                    <a href="{{ route('categories.index') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Ver Categorías</h4>
                        <p class="text-sm">Consulta todas las categorías disponibles en el sistema.</p>
                    </a>

                    <!-- Crear Producto -->
                    <a href="{{ route('products.create') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Crear Producto</h4>
                        <p class="text-sm">Registra nuevos productos en el inventario.</p>
                    </a>

                    <!-- Listar Productos -->
                    <a href="{{ route('products.index') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Ver Productos</h4>
                        <p class="text-sm">Revisa todos los productos registrados en el sistema.</p>
                    </a>
                </div>
            </div>
            @endrole


            @role('cajera')
            <div class="p-6 bg-[#f9fafb] border-l-8 border-[#708238] rounded shadow">
                <h3 class="text-lg font-semibold text-[#708238]">Bienvenida Cajera</h3>
                <p class="mt-2 text-gray-700">
                    Puedes registrar nuevas ventas, seleccionar productos con cantidades específicas y ver tus propias transacciones.
                </p>

                <div class="mt-6 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
                    <!-- Crear Venta -->
                    <a href="{{ route('sales.create') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Registrar Venta</h4>
                        <p class="text-sm">Selecciona productos y cantidades para registrar una nueva venta.</p>
                    </a>

                    <!-- Listado de Ventas -->
                    <a href="{{ route('sales.index') }}"
                    class="block p-5 bg-white text-gray-700 border border-[#708238] rounded-lg shadow hover:bg-[#708238] hover:text-white transition">
                        <h4 class="font-bold mb-1">Mis Ventas</h4>
                        <p class="text-sm">Consulta el historial de ventas que tú has registrado.</p>
                    </a>
                </div>
            </div>
            @endrole


        </div>
    </div>
</x-app-layout>
