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
        "title",
        "slug",
        "going_date",
        "return_date",
        "description",
        "type",
        "is_recommended",
        "category_id",
        "airline_id"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'post_id');
    }

    public function mainPhoto()
    {
        return $this->hasOne(Photo::class, 'post_id')->where('is_main', true);
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
