<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;

class Branches extends Component
{
    public function render()
    { 
    	$cities = City::all();
        return view('livewire.branches',['cities'=>$cities]);
    }
}
