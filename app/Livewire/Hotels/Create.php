<?php

namespace App\Livewire\Hotels;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public $name_en;
    public $name_fr;
    public $name_ar;
    public $address_en;
    public $address_fr;
    public $address_ar;
    public $city;
    public $distance;
    #[Validate(['primary_photo' => 'image|max:1024'])]
    public $primary_photo;

    #[Validate(['hotel_photos.*' => 'image|max:1024'])]
    public $hotel_photos;


    public function render()
    {
        return view('livewire.hotels.create');
    }

    public function save()
    {
        $this->validate([
            'name_en' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'address_en' => 'required|string|max:255',
            'address_fr' => 'required|string|max:255',
            'address_ar' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'distance' => 'required|numeric',
            'primary_photo' => 'nullable|image|max:1024',
            'hotel_photos.*' => 'nullable|image|max:1024',
        ]);

        $hotel = \App\Models\Hotel::create([
            'name_en' => $this->name_en,
            'name_fr' => $this->name_fr,
            'name_ar' => $this->name_ar,
            "slug_en" => Str::slug($this->name_en),
            "slug_ar" => Str::slug($this->name_ar),
            "slug_fr" => Str::slug($this->name_fr),
            'address_en' => $this->address_en,
            'address_fr' => $this->address_fr,
            'address_ar' => $this->address_ar,
            'city' => $this->city,
            'distance' => $this->distance,
        ]);

        if ($this->primary_photo) {
           $this->primary_photo->store('photos');
        }

        if ($this->hotel_photos) {
            foreach ($this->hotel_photos as $photo) {
                $photo->store('photos');
            }
        }

        session()->flash('message', __('index.Hotel created successfully.'));

        $this->dispatch('hotel-created');
        $this->reset(['name_en', 'name_fr', 'name_ar', 'address_en', 'address_fr', 'address_ar', 'city', 'distance', 'primary_photo', 'hotel_photos']);
        return $hotel;
    }
}
