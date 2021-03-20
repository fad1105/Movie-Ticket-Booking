<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	
    use HasFactory;
    protected $fillable = [
        'city_name',
        'address',
        
    ]; 

    public function shows()
    {
        return $this->hasMany(\App\Models\Show::class);
    }
}