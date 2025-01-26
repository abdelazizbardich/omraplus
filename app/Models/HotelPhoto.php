<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPhoto extends Model
{
    use HasFactory;

    protected $table = 'hotel_phots';

    protected $fillable = [
        'url',
        'features',
        'hotels_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id');
    }
}
