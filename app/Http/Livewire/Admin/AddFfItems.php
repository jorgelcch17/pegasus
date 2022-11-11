<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AddFfItems extends Component
{
    use WithFileUploads;

    public $open = false;

    public $name, $description, $price, $image, $service;

    public function mount(Service $service){
        $this->service = $service;
    }

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image' => 'required|image|max:1024'
    ];

    public function save()
    {
        $this->validate();

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('items', $imageName);
        $slug = Str::slug($this->name);

        Item::create([
            'name' => $this->name,
            'slug' => $slug,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $imageName,
            'service_id' => $this->service->id
        ]);

        $this->reset(['open', 'name', 'description', 'price', 'image']);

        $this->emitTo('admin.items', 'render');
    }

    public function render()
    {
        return view('livewire.admin.add-ff-items');
    }
}
