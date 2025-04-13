<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
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

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_categories');
    }
    public function name(): Attribute
    {
        return Attribute::make(
            get: fn () => match (app()->getLocale()) {
                'en' => $this->name_en,
                'ar' => $this->name_ar,
                'fr' => $this->name_fr,
                default => $this->name_en,
            }
        );
    }
    public function slug(): Attribute
    {
        return Attribute::make(
            get: fn () => match (app()->getLocale()) {
                'en' => $this->slug_en,
                'ar' => $this->slug_ar,
                'fr' => $this->slug_fr,
                default => $this->slug_en,
            }
        );
    }
    public function description(): Attribute
    {
        return Attribute::make(
            get: fn () => match (app()->getLocale()) {
                'en' => $this->description_en,
                'ar' => $this->description_ar,
                'fr' => $this->description_fr,
                default => $this->description_en,
            }
        );
    }

    public function photo()
    {
        return $this->hasOne(Photo::class, 'post_id')->where('type', 'blogcategory');
    }

}
