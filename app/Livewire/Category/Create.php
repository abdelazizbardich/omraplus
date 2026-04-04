<?php

namespace App\Livewire\Category;

use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{


    #[Validate('required|min:5')]
    public $name_en;
    #[Validate('required|min:5')]
    public $name_fr;
    #[Validate('required|min:5')]
    public $name_ar;


    public function render()
    {
        return view('livewire.category.create');
    }

    public function save()
    {
        $this->validate([
            'name_en' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ]);

        \App\Models\Category::create([
            'name_en' => $this->name_en,
            'name_fr' => $this->name_fr,
            'name_ar' => $this->name_ar,
            'slug_en' => Str::slug($this->name_en),
            'slug_ar' => Str::slug($this->name_ar),
            'slug_fr' => Str::slug($this->name_fr),
        ]);

        session()->flash('message', __('index.Category created successfully.'));

        $this->dispatch('category-created');
        $this->reset(['name_en', 'name_fr', 'name_ar']);
    }
}
