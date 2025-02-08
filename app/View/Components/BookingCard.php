<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookingObject{
    public $featured = false;
}

class BookingCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public object $booking = new BookingObject(),
        public ?string $size = 'big',
        public int $index
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // alfabet letter by index
        return view('components.booking-card', [
            'booking' => $this->booking,
            'index' => $this->index,
            'size' => $this->size
        ]);
    }
}