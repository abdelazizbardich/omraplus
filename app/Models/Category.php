<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "description"
    ];

    // Photo
    public function photo()
    {
        return $this->hasMany(Photo::class, 'post_id');
    }
}
