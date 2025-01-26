<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightPhoto extends Model
{
    use HasFactory;

    protected $table = 'flight_photos';

    protected $fillable = [
        'url',
        'features',
        'flight_id'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class, 'id');
    }


}
