<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\FfOrder;

class OrdersIndex extends Component
{
    public function setPending($id){
        $order = FfOrder::find($id);
        $order->order_status = 'pending';
        $order->save();
    }

    public function setApproved($id){
        $order = FfOrder::find($id);
        $order->order_status = 'approved';
        $order->save();
    }

    public function setCompleted($id){
        $order = FfOrder::find($id);
        $order->order_status = 'completed';
        $order->save();
    }

    public function setCanceled($id){
        $order = FfOrder::find($id);
        $order->order_status = 'canceled';
        $order->save();
    }

    public function render()
    {
        $orders = FfOrder::orderBy('id', 'desc')->get();
        return view('livewire.admin.orders-index', compact('orders'))->layout('layouts.admin');
    }
}
