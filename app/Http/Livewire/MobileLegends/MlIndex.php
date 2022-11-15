<?php

namespace App\Http\Livewire\MobileLegends;

use Livewire\Component;

class MlIndex extends Component
{
    public function render()
    {
        $items = \App\Models\MobileLegendItem::where('is_active', true)->get();
        return view('livewire.mobile-legends.ml-index', compact('items'))->layout('layouts.app');
    }
}
