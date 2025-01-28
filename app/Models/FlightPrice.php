<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightPrice extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'flights_prices';
    protected $primaryKey = 'flight_id';

    protected $fillable = [
        'flight_id',
        'room_type_id',
        'booking_id',
        'price',
        'price_two_to_three_p',
        'price_three_to_five_p',
        'price_five_to_eight_p'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}

