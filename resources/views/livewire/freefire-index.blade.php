<div>
    <x-slot name="header">
        {{-- <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a class="hover:underline" href="{{ route('home') }}">Inicio</a> / Free Fire
            </h2>
        </div> --}}
        <ul class="flex border-b">
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                    href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                    href="#">Free Fire</a>
            </li>
        </ul>
    </x-slot>
    <div class="py-1">
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
            <div class="p-4 ">
                <p><span class="text-red-400">Nota:</span> su cuenta debe pertenecer a la region
                    SUDAMERICA</p>
            </div>
            <div class="p-2 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 mt-2 gap-2">
                @foreach ($items as $item)
                    <div
                        class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('image') }}/{{ $item->image }}"
                                alt="{{ $item->name }}" />
                        </a>
                        <div class="p-3">
                            <label for="item-{{ $item->id }}">
                                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">{{ $item->name }} <p
                                        class="text-red-900"> {{ $item->bonus }}</p>
                                </h5>
                            </label>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 inline-block line-through">Bs
                                20.</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 inline-block">Bs
                                {{ $item->price }} </p>
                            <a href="{{ route('freefire.detail', $item) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Comprar Ahora
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="p-2">
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sobre FREE FIRE
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Es el último juego de disparos de
                        supervivencia
                        disponible en el móvil. Cada juego de 10 minutos te pondrá en una isla remota con otros 49
                        jugadores
                        buscando sobrevivir. Los jugadores podrán elegir con libertad su punto de partida y usar su
                        paracaídas e intentar mantenerse en la zona segura el mayor tiempo posible. Podrán conducir
                        vehículos para explorar el mapa, crear estrategias para esconderse o usar objetos para
                        camuflajearse
                        en el pasto. Embosca y caza, solo hay un objetivo: sobrevivir.</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">LOS DIAMANTES son los recursos más valiosos
                        en Free Fire.
                        Úsalos para comprar artículos en la Tienda, activar el Pase Élite, girar en Diamante Royale,
                        comprar
                        personajes, actualizar personajes y desbloquear habilidades de personajes.</p>
                </a>
            </div>
        </div>
    </div>
