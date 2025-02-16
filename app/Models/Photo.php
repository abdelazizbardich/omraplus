<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        "url",
        "type",
        "post_id",
        "is_main"
    ];

    /**
     * Get the user's first name.
     */
    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset('storage/'.$value),
        );
    }
}
