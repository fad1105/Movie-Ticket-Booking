<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\City;

class BookingController extends Controller
{
    //
    public function show_movie_detail(Request $req) {
        $movies_name = Movie::where('id',$req->movie_id)->get();
        $city_name = City::where('id',$req->city_id)->get('city_name');

        return view('show_movie_detail',['movies_name'=>$movies_name,'city_name'=>$city_name]);
    }
}
