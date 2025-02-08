<?php


namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label,
        public array $options,
        public string $value = '',
        public string $class = '',
        public string $id = '',
        public bool $required = false,
        public string $placeholder = '',
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select',
        [
            'name' => $this->name,
            'label' => $this->label,
            'options' => $this->options,
            'value' => $this->value,
            'class' => $this->class,
            'id' => $this->id,
            'required' => $this->required,
            'placeholder' => $this->placeholder,
        ]
    );
    }
}
