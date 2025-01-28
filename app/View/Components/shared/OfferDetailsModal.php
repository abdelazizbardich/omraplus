<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfferDetailsModal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.offer-details-modal', [
            'data' => $this->data
        ]);
    }
}
