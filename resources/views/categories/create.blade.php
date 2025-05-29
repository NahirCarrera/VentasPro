{{-- resources/views/categorias/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Create Category') }}
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

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-black">Name</label>
                        <input type="text" name="name" id="name" required
                               class="mt-1 block w-full p-2 border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]">
                    </div>
                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-[#708238] hover:bg-[#5e6f2f] text-white font-semibold py-2 px-4 rounded-lg transition">
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>