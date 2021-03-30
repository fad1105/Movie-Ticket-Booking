<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $fillable = [
    	'city_id',
    	'movie_id',
    	'show_date',
    	'show_time',
        
    ];

    public function city()
    {
    	return $this->belongsTo(\App\Models\City::class);
    } 

    public function movie()
    {
    	return $this->belongsTo(\App\Models\Movie::class);
    }
}
