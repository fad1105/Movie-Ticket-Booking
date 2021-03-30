<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Show ;
use App\Models\City ;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $cities = City::all();
        return view('location',['cities'=>$cities]);
    }

    // Added method 

    public function adminHome()
    {
        return view('adminHome');
    }
    public function branchHome()
    {
        return view('branchHome');
    }

    public function customerHome(Request $req){
        //$req = 1 ;
        $movies = Show::where('city_id',$req->city_id)->distinct()->get('movie_id');
        $movies_name = Movie::whereIn('id',$movies)->get();
        return view('customer_home',['movies'=>$movies_name,'city_id'=>$req->city_id]);
        
    }
}

?>