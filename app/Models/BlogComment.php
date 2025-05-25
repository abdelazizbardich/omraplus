<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{

    protected $fillable = [
        'blog_post_id',
        'content',
        'is_approved',
        'is_spam',
        'guest_name',
        'guest_email',
        'lang'
    ];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
