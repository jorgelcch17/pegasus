<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Paquetes de free fire
            </h2>
            {{-- @livewire('admin.add-item', ['service' => $service]) --}}
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}

                <div class="relative shadow-md sm:rounded-lg"> {{-- se le quito la propiedad overflow-x-auto --}}
                    @if($items->count())
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Imagen
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Descripcion
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Precio
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Estado
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex items-center py-4 px-2 sm:px-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10 rounded-full" src="{{ asset('storage/items') }}/{{ $item->image }}"
                                            alt="Jese image">
                                        <div class="pl-3">
                                            <div class="text-sm sm:text-base font-semibold">{{ $item->name }}</div>
                                        </div>
                                    </th>
                                    <td class="py-4 px-2 sm:px-6 text-right sm:text-center">
                                        {{ $item->description }}
                                    </td>
                                    <td class="py-4 px-2 sm:px-6 text-right sm:text-center">
                                        US {{ $item->price }}
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($item->is_active == 1)
                                            <span
                                                class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Activo</span>
                                        @else
                                            <span
                                                class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Inactivo</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        <x-jet-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </x-slot>

                                            <x-slot name="content">
                                                <x-jet-dropdown-link class="text-left">
                                                    {{ __('Editar') }}
                                                </x-jet-dropdown-link>

                                                <x-jet-dropdown-link class="text-left"
                                                    wire:click.prevent="enabledDisabled({{ $item->id }})">
                                                    {{ __('Activar/Desactivar') }}
                                                </x-jet-dropdown-link>

                                                <div class="border-t border-gray-100"></div>

                                                <!-- Authentication -->
                                                <x-jet-dropdown-link class="text-left">
                                                    {{ __('Subir posición') }}
                                                </x-jet-dropdown-link>
                                                <x-jet-dropdown-link class="text-left">
                                                    {{ __('Bajar posición') }}
                                                </x-jet-dropdown-link>

                                                <div class="border-t border-gray-100"></div>

                                                <x-jet-dropdown-link class="text-left"
                                                    wire:click="deleteItem({{ $item->id }})">
                                                    {{ __('Eliminar') }}
                                                </x-jet-dropdown-link>
                                            </x-slot>
                                        </x-jet-dropdown>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="flex justify-center items-center">
                            <p class="text-gray-500 py-6">No hay items para este servicio</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
