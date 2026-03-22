<?php

namespace App\Livewire\Rooms;

use Livewire\Attributes\On;
use Livewire\Component;

class View extends Component
{
    public function render()
    {
        $rooms = \App\Models\Room::all();
        return view('livewire.rooms.view', compact('rooms'));
    }

    #[On('room-created')]
    public function refreshPosts()
    {
        // Executes when event is received
        session()->flash('message', "New room created, refreshing list...");
    }
}
