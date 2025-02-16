<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "address",
        "city",
        "distance"
    ];

    // Photos
    public function photos()
    {
        return $this->hasMany(Photo::class, 'post_id');
    }

    // Get photo where is_main = true
    public function mainPhoto()
    {
        return $this->hasOne(Photo::class, 'post_id')->where('is_main', true);
    }
}
