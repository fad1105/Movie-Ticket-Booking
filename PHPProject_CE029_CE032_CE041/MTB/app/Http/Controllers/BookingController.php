<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\City;
use App\Models\Show;
use App\Models\payment;
use App\Models\Booking;
use Carbon\Carbon;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;

class BookingController extends Controller
{



    public function seat_booking(Request $req)
    {
        
        $show_id =  $req->show_id;
       
        $booked_seat = Booking::where('show_id' , $show_id)->get('seat_no') ;
        $seat = array();
        $seat[0] = 0;
        for ($i = 0; $i < count($booked_seat); $i++){
            $seat[$i+1] = (string)$booked_seat[$i]->seat_no;
            
        }
       
       
        //return $booked_seat ;
        return view('seat_booking', [ 'show_id' => $show_id ,'booked_seat'=>$seat ]);
    }




    public function booking(Request $req)
    {
        $show_id =  $req->show_id;
        $show = Show::where('id', $show_id)->get();
        $count = count($req->seat);
        if($count == 0){
            echo "<center></h4>please select  seat<h4></center>";
            
        }
        $seat = $req->seat;
        return view('booking', ['count' => $count, 'seat' => $seat, 'show_id' => $show_id ,'show'=>$show ]);
        //return $count = count($req->seat) ;



    }



    public function show_ticket(Request $req)
    {
        $per_seat_price = 100;
        $no_of_seat = count($req->seat);
        $show_id = $req->show_id;
        $user_id = auth()->id();

        $new_payment = new Payment;
        $new_payment->per_seat_price  = $per_seat_price;
        $new_payment->no_of_seat  = $no_of_seat;
        $new_payment->show_id  = $show_id;
        $new_payment->user_id  = $user_id;
        $new_payment->save();

        for ($i = 0; $i < $no_of_seat; $i++) {
            $booking = new Booking;
            $booking->payment_id = $new_payment->id;
            $booking->show_id  = $show_id;
            $booking->seat_no = $req->seat[$i];
            $booking->save();
        }
        $seat = $req->seat ;
        $count = $no_of_seat ;
        $show = Show::where('id', $show_id)->get();
        $movies = Movie::where('id', $show[0]->movie_id)->get();
        $city = City::where('id', $show[0]->city_id)->get();
        return view('show_ticket', ['count' => $count, 'seat' => $seat, 'show' => $show,'movies' => $movies, 'city' => $city]);
    }





    public function show_movie_detail(Request $req)
    {
        $ldate = date('Y-m-d');

        $movies_name = Movie::where('id', $req->movie_id)->get();
        $city_name = City::where('id', $req->city_id)->get();

        $show = Show::where('movie_id', $req->movie_id)->where('city_id', $req->city_id)->where('show_date', '>=', $ldate)->distinct()->get('show_date');
        $show->sortBy('show_date');

        $count = count($show);
        $i = 0;
        $time = array();
        /* $time = Show::where('movie_id',$req->movie_id )->where('city_id' , $req->city_id)->where('show_date' , $show[0]->show_date)->get() ; */
        for ($i = 0; $i < $count; $i++) {
            //echo $show[$i]->show_date ;
            $time[$i] = Show::where('movie_id', $req->movie_id)->where('city_id', $req->city_id)->where('show_date', $show[$i]->show_date)->get();
            //echo $time[$i] ;
        }
        //print_r($time);
        return view('show_movie_detail', [
            'movies_name' => $movies_name,
            'city' => $city_name,
            'show' => $show,
            'count' => $count,
            'times' => $time
        ]);
    }
}
