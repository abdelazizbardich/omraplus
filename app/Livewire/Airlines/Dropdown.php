<?php

namespace App\Livewire\Airlines;

use Livewire\Component;

class Dropdown extends Component
{

    public $airelines;
    public $selected;

    public function render()
    {
        $this->airelines = \App\Models\Airline::orderByDesc('id')->get();
        return view('livewire.airlines.dropdown', ['airelines' => $this->airelines, 'selected' => $this->selected]);
    }

    #[On('airline-created')]
    public function refreshAirlines()
    {
        $this->airelines = \App\Models\Airline::orderByDesc('id')->get();
    }
}
