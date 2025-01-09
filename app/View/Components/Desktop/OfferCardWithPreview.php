<?php

namespace App\View\Components\Desktop;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfferCardWithPreview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        // index
        public string $index = "0"
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.desktop.offer-card-with-preview',
        [
            'index' => $this->index
        ]);
    }
}
