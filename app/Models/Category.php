<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        "name_en",
        "name_ar",
        "name_fr",
        "slug_en",
        "slug_ar",
        "slug_fr",
        "description_en",
        "description_ar",
        "description_fr"
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

    public function description()
    {
        return match (app()->getLocale()) {
            'en' => $this->description_en,
            'ar' => $this->description_ar,
            'fr' => $this->description_fr,
            default => $this->description_en,
        };
    }



    // Photo
    public function photo()
    {
        return $this->hasMany(Photo::class, 'post_id')->where('type', 'category');
    }
}
