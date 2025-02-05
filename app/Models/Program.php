<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        "flight_id",
        "hotel_id_mecca",
        "hotel_id_medina",
        "seat_count",
        "have_meals",
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function hotelMecca()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id_mecca');
    }

    public function hotelMedina()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id_medina');
    }

    public function prices()
    {
        return $this->hasMany(ProgramPrice::class);
    }
}
