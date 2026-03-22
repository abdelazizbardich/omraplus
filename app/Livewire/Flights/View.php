<?php

namespace App\Livewire\Flights;

use Livewire\Component;

class View extends Component
{

    public $flights;
    public function render()
    {
        $this->flights = \App\Models\Flight::all();
        return view('livewire.flights.view');
    }
}
