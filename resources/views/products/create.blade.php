
{{-- resources/views/productos/create.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Create Product') }}
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

                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-black">Nombre</label>
                        <input type="text" name="name" id="name" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-black">Precio</label>
                        <input type="number" name="price" id="price" step="0.01" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mb-4">
                        <label for="stock" class="block text-sm font-medium text-black">Stock</label>
                        <input type="number" name="stock" id="stock" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mb-4">
                        <label for="category_id" class="block text-sm font-medium text-black">Categoría</label>
                        <select name="category_id" id="category_id" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-[#708238] hover:bg-[#5e6f2f] text-white font-semibold py-2 px-4 rounded-lg transition">
                            Crear Producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>