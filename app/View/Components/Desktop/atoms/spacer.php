<?php


namespace App\View\Components\Desktop\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class spacer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $size = "0"){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.desktop.atoms.spacer', [
            'size' => $this->size
        ]);
    }
}
