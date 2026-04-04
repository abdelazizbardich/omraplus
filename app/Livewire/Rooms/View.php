<?php

namespace App\Livewire\Rooms;

use Livewire\Attributes\On;
use Livewire\Component;

class View extends Component
{

    public $rooms;

    public function render()
    {
        $this->rooms = \App\Models\Room::all();
        return view('livewire.rooms.view', ['rooms' => $this->rooms]);
    }

    #[On('room-created')]
    public function refreshPosts()
    {
        $this->rooms = \App\Models\Room::all();
    }

    public function delete($id)
    {
        \App\Models\Room::find($id)->delete();
        $this->rooms = \App\Models\Room::all();
    }
}
