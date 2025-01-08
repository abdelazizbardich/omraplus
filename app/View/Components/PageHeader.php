<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle = '',
        public array $breadcrumbs = []
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('desktop.components.page-header', [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }
}
