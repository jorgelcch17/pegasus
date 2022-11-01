<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Selecciona un juego:
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-5">
                <a class="bg-white border-2 border-blue-200 p-2 hover:shadow-lg" href="{{ route('freefire.index') }}">
                    <img class="" src="{{ asset('image/freefire.webp') }}" alt="freefire">
                    <span class="block font-bold text-center pt-2">Free Fire</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
