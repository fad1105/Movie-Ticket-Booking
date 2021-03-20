<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	use HasFactory;
    protected $fillable = [
        'movie_name',
        'language',
        'trailer_link',
        'cinema_tags',
        'genres',
        'release_data',
        'duration',
    ];

    public function shows()
    {
        return $this->hasMany(\App\Models\Show::class);
    }

}
