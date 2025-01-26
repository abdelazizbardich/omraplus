<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flights';

    protected $fillable = [
        'title',
        'going_date',
        'return_date',
        'flight_going',
        'flight_return',
        'description',
    ];

    public function flightGoing()
    {
        return $this->belongsTo(FlightLine::class, 'flight_going');
    }

    public function flightReturn()
    {
        return $this->belongsTo(FlightLine::class, 'flight_return');
    }
}
