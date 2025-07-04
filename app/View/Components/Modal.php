<?php


namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $id = "#",
        public mixed $index = "0"
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal',
        [
            'id' => $this->id,
            'index' => $this->index
        ]);
    }
}
