<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Registrar Venta') }}
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

                <form action="{{ route('sales.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="product_id" class="block text-sm font-medium text-black">Producto</label>
                        <select name="product_id" id="product_id" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }} (${{ number_format($product->price, 2) }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="quantity" class="block text-sm font-medium text-black">Cantidad</label>
                        <input type="number" name="quantity" id="quantity" min="1" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-[#708238] hover:bg-[#5e6f2f] text-white font-semibold py-2 px-4 rounded-lg transition">
                            Registrar Venta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
