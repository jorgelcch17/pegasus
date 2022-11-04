<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrdersIndex extends Component
{
    public function render()
    {
        $orders = auth()->user()->ff_orders()->orderBy('id', 'DESC')->paginate(7);
        return view('livewire.orders-index', compact('orders'))->layout('layouts.app');
    }
}
