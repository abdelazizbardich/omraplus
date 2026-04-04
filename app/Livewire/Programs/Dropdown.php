<?php

namespace App\Livewire\Programs;

use App\Models\Program;
use Livewire\Attributes\On;
use Livewire\Component;

class Dropdown extends Component
{
    public $programs;
    public $selected;
    public $name = 'program';

    public function mount()
    {
        $this->programs = Program::with(['flight', 'hotelMecca', 'hotelMedina'])
            ->orderByDesc('id')
            ->get();
    }

    public function render()
    {
        return view('livewire.programs.dropdown');
    }

    #[On('program-created')]
    public function refreshPrograms()
    {
        $this->programs = Program::with(['flight', 'hotelMecca', 'hotelMedina'])
            ->orderByDesc('id')
            ->get();
    }
}
