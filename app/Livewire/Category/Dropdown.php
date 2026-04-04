<?php

namespace App\Livewire\Category;

use Livewire\Component;

class Dropdown extends Component
{

    public $categories;
    public $selected;

    public function render()
    {
        $this->categories = \App\Models\Category::orderByDesc('id')->get();
        return view('livewire.category.dropdown', ['categories' => $this->categories, 'selected' => $this->selected]);
    }

    #[On('category-created')]
    public function refreshCategories()
    {
        $this->categories = \App\Models\Category::orderByDesc('id')->get();
    }
}
