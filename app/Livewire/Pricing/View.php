<?php

namespace App\Livewire\Pricing;

use Livewire\Component;

class View extends Component
{
    public $pricings;
    public function render()
    {
        $this->pricings = \App\Models\ProgramPrice::all();
        return view('livewire.pricing.view');
    }
}
