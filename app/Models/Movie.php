<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'movie',
        'genre',
        'release',
        'synopsis',
        'rating',
        'image',
        'country_id'

    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
