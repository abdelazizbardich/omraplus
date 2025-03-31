<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        "title_en",
        "title_ar",
        "title_fr",
        "slug_en",
        "slug_ar",
        "slug_fr",
        "description_en",
        "description_ar",
        "description_fr",

        "going_date",
        "return_date",
        "type",
        "is_recommended",
        "category_id",
        "airline_id"
    ];

    public function title(): Attribute
    {
        $title = match (app()->getLocale()) {
            'en' => $this->title_en,
            'ar' => $this->title_ar,
            'fr' => $this->title_fr,
            default => $this->title_en,
        };
        return Attribute::make(
            get: fn () => $title
        );
    }

    public function slug(): Attribute
    {
        $slug = match (app()->getLocale()) {
            'en' => $this->slug_en,
            'ar' => $this->slug_ar,
            'fr' => $this->slug_fr,
            default => $this->slug_en,
        };
        return Attribute::make(
            get: fn () => $slug
        );
    }

    public function description(): Attribute
    {
        $description = match (app()->getLocale()) {
            'en' => $this->description_en,
            'ar' => $this->description_ar,
            'fr' => $this->description_fr,
            default => $this->description_en,
        };
        return Attribute::make(
            get: fn () => $description
        );
    }

    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'post_id')->where('type', 'flight');
    }

    public function mainPhoto()
    {
        return $this->hasOne(Photo::class, 'post_id')->where('type', 'flight')->where('is_main', true);
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'flight_id');
    }

    public function airline()
    {
        return $this->hasOne(Airline::class, 'id', 'airline_id');
    }

    public function getLowestPrice()
    {
        $price =  $this->programs()
            ->selectRaw('program_prices.price as price, program_prices.old_price as old_price')
            ->leftJoin('program_prices', 'programs.id', '=', 'program_prices.program_id')
            ->orderBy('program_prices.price')
            ->limit(1)
            ->groupBy('flight_id', 'program_prices.price', 'program_prices.old_price', 'program_prices.id');
            return $price->first();
    }

    // description cast
    public function short_description()
    {
        // return sort value from decription
        $description = $this->description;
        $description = strip_tags($description);
        $description = substr($description, 0, 100);
        $description = substr($description, 0, strrpos($description, ' '));
        $description = $description . '...';
        return $description;
        
    }



}
