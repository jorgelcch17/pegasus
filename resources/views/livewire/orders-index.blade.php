<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ordenes
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- imagen de free fire y el titulo Free Fire --}}
            <div class="flex items-center my-2 space-x-2">
                <img src="{{ asset('storage/items') }}/freefire.webp" alt="free fire" class="w-10 h-10 rounded-lg">
                <h1 class="text-xl font-bold text-gray-800">Free Fire</h1>
            </div>
            <div class="bg-white shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}

                <div class="relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    N. Orden
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Producto
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Precio
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    ID_cuenta
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nickname Cuenta
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
                            @foreach ($orders as $order)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Orden-{{ $order->id }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $order->freefire_item->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        USD {{ $order->price }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $order->id_account }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $order->nickname_account }}
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($order->order_status == 'pending')
                                            <span
                                                class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Pago
                                                pendiente</span>
                                        @elseif($order->order_status == 'approved')
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-700 dark:text-blue-300">Aprobada</span>
                                        @elseif($order->order_status == 'completed')
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-700 dark:text-green-300">Completada</span>
                                        @elseif($order->order_status == 'canceled')
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-700 dark:text-red-300">Cancelada</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($order->order_status !== 'canceled' && $order->order_status !== 'completed')
                                            <x-jet-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </x-slot>

                                                <x-slot name="content">
                                                    @if ($order->order_status == 'pending')
                                                        <x-jet-dropdown-link class="text-left"
                                                            href="{{ route('freefire.payment', $order) }}">
                                                            {{-- <a href="{{ route('freefire.payment', $order) }}">Ir a pagar</a> --}}
                                                            Ir a pagar
                                                        </x-jet-dropdown-link>

                                                        <x-jet-dropdown-link class="text-left">
                                                            Pagar por whatsapp
                                                        </x-jet-dropdown-link>
                                                    @endif

                                                    <x-jet-dropdown-link class="text-left">
                                                        Cancelar orden
                                                    </x-jet-dropdown-link>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        @if ($orders->count() > 7)
                            <tfoot>
                                <tr>
                                    <td colspan="7" class="py-4 px-6">
                                        {{ $orders->links() }}
                                    </td>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
