<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Show;
use App\Models\City;
use App\Models\Movie;

class Shows extends Component
{
    public function render()
    {
    	$city_id = City::where('user_id',auth()->user()->id)->get()[0]->id;
        $show = Show::where('city_id', $city_id)->get();
        for($i=0 ; $i< count($show);$i++){
            $movie_name = Movie::where('id',$show[$i]->movie_id)->get('movie_name');
            $show[$i]->movie_name = $movie_name[0]->movie_name ;
        }
        return view('livewire.shows', ['shows' => $show]);
    }
}
