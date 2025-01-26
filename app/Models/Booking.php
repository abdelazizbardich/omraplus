<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'hotel_mekka',
        'hotel_medina',
    ];

    public function hotelMekka()
    {
        return $this->belongsTo(Hotel::class, 'hotel_mekka');
    }

    public function hotelMedina()
    {
        return $this->belongsTo(Hotel::class, 'hotel_medina');
    }
}
