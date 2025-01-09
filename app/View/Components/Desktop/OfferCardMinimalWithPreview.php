<?php

namespace App\View\Components\Desktop;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfferCardMinimalWithPreview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $featured = false
    )
    {
        // 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.desktop.offer-card-minimal-with-preview',
            [
                'featured' => $this->featured
            ]
        );
    }
}
