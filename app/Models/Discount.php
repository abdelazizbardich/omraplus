<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "code",
        "type",
        "value",
        "program_id"
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
