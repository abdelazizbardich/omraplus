<?php

namespace App\Livewire\Airlines;

use Livewire\Component;

class View extends Component
{

    public $airlines;
    public function render()
    {
        $this->airlines = \App\Models\Airline::all();
        return view('livewire.airlines.view');
    }
}
