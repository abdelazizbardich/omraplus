<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        "room_id",
        "program_id",
        "discount_id",
        "old_price",
        "price"
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
