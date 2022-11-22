<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a class="hover:underline" href="{{ route('home') }}">Inicio</a> / Mobile Legends
            </h2>
        </div>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- imprimiendo el mensaje  --}}
            @if (session()->has('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Exito!</strong>
                    <span class="block sm:inline">{{ session('message') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            @endif
            <div class="bg-white shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}
                <div class="divide-y px-2">
                    @foreach ($items as $item)
                        <a href="{{ route('mobile-legend.detail', $item) }}"
                            class="flex items-center justify-between gap-2 p-2">
                            <div class="flex">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('image') }}/{{ $item->image }}"
                                    alt="{{ $item->name }}">
                                <div class="ml-2 text-sm flex flex-col justify-center">
                                    <div>
                                        <label for="item-{{ $item->id }}"
                                            class="font-medium text-gray-900 dark:text-gray-300">{{ $item->name }}</label>
                                        <span class="font-semibold text-green-600">{{ $item->bonus }}</span>
                                    </div>
                                    @if ($item->description)
                                        <p class="text-gray-500 dark:text-gray-400">{{ $item->description }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="flex flex-col justify-center">
                                <span class="text-gray-500 dark:text-gray-400">USD {{ $item->price }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            {{-- </div> --}}

        </div>
    </div>

</div>
