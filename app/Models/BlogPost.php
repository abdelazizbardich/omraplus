<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'user_id',
        'title_ar',
        'slug',
        'content_ar',
        'excerpt_ar',
        'title_en',
        'slug',
        'content_en',
        'excerpt_en',
        'title_fr',
        'slug',
        'content_fr',
        'excerpt_fr',
        'published_at',
        'is_published',
        'view_count',
        'share_count',
    ];

    public function blogCategories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_post_categories');
    }

    public function blogTags()
    {
        return $this->belongsToMany(BlogTag::class, 'blog_post_tags');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class)->where('lang', app()->getLocale())->where('is_approved', true)->where('is_spam', false)->orderBy('created_at', 'desc');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
    public function title(): Attribute
    {
        return Attribute::make(
            get: fn () => match (app()->getLocale()) {
                'en' => $this->title_en,
                'ar' => $this->title_ar,
                'fr' => $this->title_fr,
                default => $this->title_en,
            }
        );
    }
    public function content(): Attribute
    {
        return Attribute::make(
            get: fn () => match (app()->getLocale()) {
                'en' => $this->content_en,
                'ar' => $this->content_ar,
                'fr' => $this->content_fr,
                default => $this->content_en,
            }
        );
    }
    public function excerpt(): Attribute
    {
        return Attribute::make(
            get: fn () => match (app()->getLocale()) {
                'en' => $this->excerpt_en,
                'ar' => $this->excerpt_ar,
                'fr' => $this->excerpt_fr,
                default => $this->excerpt_en,
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

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeNotPublished($query)
    {
        return $query->where('is_published', false);
    }

    public function scopePublishedAt($query)
    {
        return $query->where('published_at', '<=', now());
    }

    public function scopeNotPublishedAt($query)
    {
        return $query->where('published_at', '>', now());
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title_en', 'like', "%$search%")
                ->orWhere('title_ar', 'like', "%$search%")
                ->orWhere('title_fr', 'like', "%$search%")
                ->orWhere('content_en', 'like', "%$search%")
                ->orWhere('content_ar', 'like', "%$search%")
                ->orWhere('content_fr', 'like', "%$search%");
        });
    }

    public function scopeFilterByCategory($query, $category)
    {
        return $query->whereHas('blogCategories', function ($q) use ($category) {
            $q->where('slug', $category);
        });
    }

    public function scopeFilterByTag($query, $tag)
    {
        return $query->whereHas('blogTags', function ($q) use ($tag) {
            $q->where('slug', $tag);
        });
    }

    public function scopeFilterByDate($query, $year, $month = null)
    {
        $query->whereYear('published_at', $year);
        if ($month) {
            $query->whereMonth('published_at', $month);
        }
        return $query;
    }

    public function photo()
    {
        return $this->hasOne(Photo::class, 'post_id')->where('type', 'blog_post');
    }
}
