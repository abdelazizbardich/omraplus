<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextOfferCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $description,
        public string $buttonText = "",
        public string $buttonLink = "",
        public string $icon = ""
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-offer-card',
        [
            'title' => $this->title,
            'description' => $this->description,
            'buttonText' => $this->buttonText,
            'buttonLink' => $this->buttonLink,
            'icon' => $this->icon
        ]
    );
    }
}
