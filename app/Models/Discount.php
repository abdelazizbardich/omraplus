<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        "name_en",
        "name_ar",
        "name_fr",
        "code",
        "type",
        "value",
        "program_id"
    ];

    public function name(): Attribute
    {
        $name = match (app()->getLocale()) {
            'en' => $this->name_en,
            'ar' => $this->name_ar,
            'fr' => $this->name_fr,
            default => $this->name_en,
        };
        return Attribute::make(
            get: fn () => $name
        );
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
