<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPostCategory extends Model
{
    protected $fillable = [
        'blog_post_id',
        'blog_category_id',
    ];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
