<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "going_date",
        "return_date",
        "description",
        "is_recommended",
        "is_economic",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'post_id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
