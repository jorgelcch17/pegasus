<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FfOrder;

class FreefirePayment extends Component
{
    public $item;

    protected $listeners = ['payOrder'];

    public function mount(FfOrder $item){
        if($item->order_status == 'approved'){
            return redirect()->route('freefire.index');
        }     
        $this->item = $item;   
    }
    
    public function test(){
        dd($this->item);
    }

    public function payOrder(){
        $this->item->order_status = 'approved';
        $this->item->save();

        //enviando un flash message
        session()->flash('message', 'El pago se ha realizado con éxito');
        return redirect()->route('freefire.index');
    }

    public function render()
    {
        return view('livewire.freefire-payment')->layout('layouts.app');
    }
}
