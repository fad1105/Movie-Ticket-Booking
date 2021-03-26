<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie; 
use App\Models\City;
use App\Models\Show;

class Movies extends Component
{ 
	public $confirmingMovieAdd = false; 
    public $movie;
    public function render()
    { 
        $movies = Movie::all();
        return view('livewire.movies', ['movies' => $movies]); 
    } 

    protected $rules = [
        'movie.date' => 'required',
        'movie.time' => 'required',
    ];

    public function addMovie($id)
    {   
    	$this->validate(); 
    	$city_id = City::where('user_id',auth()->user()->id)->get();
    	$movie_id = $id;
    	$date = $this->movie['date'];
    	$time = $this->movie['time']; 
        Show::create([
    			'city_id' => $city_id[0]->id,
    			'movie_id' => $movie_id,
    			'show_date' => $date,
    			'show_time' => $time
    		]);
    		session()->flash('message', 'Movie Added Successfully'); 
            $this->confirmingMovieAdd = false;
    }

    public function confirmMovieAdd($id)
    {
    	$this->confirmingMovieAdd = $id;
    }

}
