<?php

namespace App\Livewire\Programs;

use Livewire\Component;

class View extends Component
{

    public $programs;
    public function render()
    {
        $this->programs = \App\Models\Program::all();
        return view('livewire.programs.view');
    }
}
