<?php

namespace App\Livewire\Rooms;

use Livewire\Component;

class Create extends Component
{

    #[Validate('required|min:5')]
    public $name_en;
    #[Validate('required|min:5')]
    public $name_fr;
    #[Validate('required|min:5')]
    public $name_ar;

    public function render()
    {
        return view('livewire.rooms.create');
    }

    public function save()
    {
        $this->validate([
            'name_en' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ]);

        \App\Models\Room::create([
            'name_en' => $this->name_en,
            'name_fr' => $this->name_fr,
            'name_ar' => $this->name_ar,
        ]);

        session()->flash('message', __('index.Room created successfully.'));

        $this->dispatch('room-created')->to(View::class);
    }
}
