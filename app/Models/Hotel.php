<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        "name_en",
        "name_ar",
        "name_fr",
        "slug_en",
        "slug_ar",
        "slug_fr",
        "address_en",
        "address_ar",
        "address_fr",
        "city",
        "distance"
    ];

    public function name(): Attribute
    {
        $name = match (app()->getLocale()) {
            'en' => $this->name_en,
            'ar' => $this->name_ar,
            'fr' => $this->name_fr,
            default => $this->name_en,
        };
        return Attribute::make(
            get: fn () => $name
        );
    }

    public function slug(): Attribute
    {
        $slug = match (app()->getLocale()) {
            'en' => $this->slug_en,
            'ar' => $this->slug_ar,
            'fr' => $this->slug_fr,
            default => $this->slug_en,
        };
        return Attribute::make(
            get: fn () => $slug
        );
    }

    public function address(): Attribute
    {
        $address = match (app()->getLocale()) {
            'en' => $this->address_en,
            'ar' => $this->address_ar,
            'fr' => $this->address_fr,
            default => $this->address_en,
        };
        return Attribute::make(
            get: fn () => $address
        );
    }

    // Photos
    public function photos()
    {
        return $this->hasMany(Photo::class, 'post_id')->where('type', 'hotel')->where('is_main', false);
    }

    // Get photo where is_main = true
    public function mainPhoto()
    {
        return $this->hasOne(Photo::class, 'post_id')->where('type', 'hotel')->where('is_main', true);
    }
}
