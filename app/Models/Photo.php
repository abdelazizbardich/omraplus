<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photo';

    protected $fillable = [
        'url',
        'features',
        'hotels_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotels_id');
    }
}
