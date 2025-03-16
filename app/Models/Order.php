<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'user_id',
        'program_price_id',
        'status',
        'payment_method',
        'payment_status',
        'pilgrims_count',
        'total_price',
    ];

    

    // has user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function programPrice()
    {
        return $this->belongsTo(ProgramPrice::class);
    }

    public function orderPrice()
    {
        return $this->programPrice()->price * $this->pilgrims_count;
    }

    // flight
    public function flight()
    {
        return $this->programPrice->program->flight;
    }

    // Program
    public function program()
    {
        return $this->programPrice->program;
    }

    // room
    public function room()
    {
        return $this->programPrice->room;
    }
}
