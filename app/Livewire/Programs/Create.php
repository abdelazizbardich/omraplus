<?php

namespace App\Livewire\Programs;

use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Program;
use Livewire\Component;

class Create extends Component
{
    public $flight_id;
    public $hotel_id_mecca;
    public $hotel_id_medina;
    public $seat_count;
    public $is_economic   = false;
    public $is_recommended = false;
    public $have_meals    = false;

    public $flights;
    public $hotels_mecca;
    public $hotels_medina;

    public function mount()
    {
        $this->flights       = Flight::orderByDesc('id')->get();
        $this->hotels_mecca  = Hotel::where('city', 'macca')->orderByDesc('id')->get();
        $this->hotels_medina = Hotel::where('city', 'medina')->orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.programs.create');
    }

    public function save()
    {
        $this->validate([
            'flight_id'      => 'required|exists:flights,id',
            'hotel_id_mecca'  => 'required|exists:hotels,id',
            'hotel_id_medina' => 'required|exists:hotels,id',
            'seat_count'     => 'required|integer|min:1',
        ]);
        
        $program = Program::create([
            'flight_id'       => $this->flight_id,
            'hotel_id_mecca'  => $this->hotel_id_mecca,
            'hotel_id_medina' => $this->hotel_id_medina,
            'seat_count'      => $this->seat_count,
            'is_economic'     => $this->is_economic,
            'is_recommended'  => $this->is_recommended,
            'have_meals'      => $this->have_meals,
        ]);

        $this->dispatch('program-created');
        $this->reset(['flight_id', 'hotel_id_mecca', 'hotel_id_medina', 'seat_count', 'is_economic', 'is_recommended', 'have_meals']);
    }
}
