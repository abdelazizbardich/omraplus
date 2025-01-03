<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfferCardMinimalWithPreview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public boolean $featured = false
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.offer-card-minimal-with-preview',
            [
                'featured' => $this->featured
            ]
        );
    }
}
