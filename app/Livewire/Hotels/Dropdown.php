<?php

namespace App\Livewire\Hotels;

use Livewire\Component;

class Dropdown extends Component
{

    public mixed $hotels;

    public $selected;

    public $name;

    public function render()
    {
        $this->hotels = \App\Models\Hotel::orderByDesc('id')->get();
        return view('livewire.hotels.dropdown', ['hotel' => $this->hotels, 'selected' => $this->selected, 'name' => $this->name]);
    }

    #[On('hotel-created')]
    public function refreshHotels()
    {
        $this->hotels = \App\Models\Hotel::orderByDesc('id')->get();
    }
}
