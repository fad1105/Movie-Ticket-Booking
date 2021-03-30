<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class AMovie extends Component
{
    public function render()
    { 
    	$movies = Movie::all();
        return view('livewire.a-movie',['movies'=>$movies]);
    }
}
