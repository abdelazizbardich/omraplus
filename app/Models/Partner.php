<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'company_name',
        'email',
        'phone',
        'motivation',
        'status',
        'referral_code',
        'commission_rate',
        'notes',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'partner_id');
    }

    public function totalCommissions(): float
    {
        return (float) $this->orders()->sum('commission_amount');
    }
}
