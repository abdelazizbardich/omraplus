<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightLine extends Model
{
    use HasFactory;

    protected $table = 'flight_lines';

    protected $fillable = [
        'title',
        'capacity',
    ];
}
