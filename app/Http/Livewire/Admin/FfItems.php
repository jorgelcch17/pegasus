<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\FreefireItem;

class FfItems extends Component
{
    protected $listeners = ['render'];

    public function enabledDisabled($id){
        $item = FreefireItem::find($id);
        $item->is_active = !$item->is_active;
        $item->save();
    }

    public function deleteItem($id){
        $item = FreefireItem::find($id);
        $item->delete();
    }

    public function render()
    {
        $items = FreefireItem::get();
        return view('livewire.admin.ff-items', compact('items'))->layout('layouts.admin');
    }
}
