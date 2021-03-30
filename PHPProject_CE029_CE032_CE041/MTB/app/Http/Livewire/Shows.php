<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Show;
use App\Models\City;

class Shows extends Component
{
    public function render()
    {
    	$city_id = City::where('user_id',auth()->user()->id)->get()[0]->id;
        $shows = Show::where('city_id', $city_id)->get();
        return view('livewire.shows', ['shows' => $shows]);
    }
}
