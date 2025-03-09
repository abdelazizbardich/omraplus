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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function programPrice()
    {
        return $this->belongsTo(ProgramPrice::class);
    }

    public function orderPrice()
    {
        return $this->programPrice()->price * $this->pilgrims_count;
    }
}
