<?php

namespace App\Livewire\Hotels;

use Livewire\Component;
use App\Models\Hotel;

class View extends Component
{

    public $hotels;

    public function render()
    {
        $this->hotels = Hotel::all();
        return view('livewire.hotels.view');
    }
}
