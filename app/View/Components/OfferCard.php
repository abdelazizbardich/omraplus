<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfferCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $index = '0',
        public object $data
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.offer-card',[
            'index' => $this->index,
            'data' => $this->data
        ]);
    }
}
