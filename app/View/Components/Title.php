<?php


namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle = '',
        public bool $centred = true
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.title',[
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'centred' => $this->centred,
        ]);
    }
}
