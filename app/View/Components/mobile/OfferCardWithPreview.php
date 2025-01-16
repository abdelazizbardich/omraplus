<?php

namespace App\View\Components\mobile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfferCardWithPreview extends Component
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
        return view('components.mobile.offer-card-with-preview',[
            'featured' => $this->featured
        ]);
    }
}
