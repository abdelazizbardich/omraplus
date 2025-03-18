<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $umrahs = [],
        public mixed $programs = []
        )
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-header',
        [
            'umrahs' => $this->umrahs,
            'programs' => $this->programs
        ]
    );
    }
}
