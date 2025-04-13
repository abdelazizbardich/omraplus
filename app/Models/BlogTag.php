<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class BlogTag extends Model
{
    
    protected $fillable = [
        "name_en",
        "name_ar",
        "name_fr",
        "slug_en",
        "slug_ar",
        "slug_fr",
    ];

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_tags');
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
}
