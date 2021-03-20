<?php

namespace App\Http\Controllers;
use App\Models\Movie ;
use Illuminate\Http\Request;

class AddMovieController extends Controller
{
    public function add_movie(Request $req){
        $movie = new Movie;
        $movie->movie_name = $req->movie_name  ;
        $movie->language = $req->language  ;
        $movie->trailer_link = $req->trailer_link  ;
        $movie->image_url = $req->image_link  ;
        $movie->cinema_tags = $req->cinema_tags  ;
        $movie->genres = implode(" , ",$req->genres)  ;
        $movie->release_date = $req->release_date  ;
        $movie->duration = $req->duration  ;
        $movie->save();
        return  view('adminHome') ;
    }
}
