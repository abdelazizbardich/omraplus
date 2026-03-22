<?php

namespace App\Livewire\Discounts;

use Livewire\Component;

class View extends Component
{

    public $discounts;
    public function render()
    {
        $this->discounts = \App\Models\Discount::all();
        return view('livewire.discounts.view');
    }
}
